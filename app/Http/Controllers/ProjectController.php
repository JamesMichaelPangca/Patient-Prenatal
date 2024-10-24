<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;

use Illuminate\Support\Facades\Auth; // Import the Auth facade

class ProjectController extends Controller
{
    public static function index()
    {
        $projects = Project::get(); // Fetch all projects by default

        if (Auth::user()->account_type == 'Member') {
            $projects = Project::join('t_tasks', 't_tasks.proj_id', '=', 't_projects.id')
                ->select('t_projects.id', 't_projects.name', 't_projects.description', 't_projects.created_at', 't_projects.updated_at') // Select project details
                ->where('t_tasks.user_assign_id', Auth::id()) // Filter tasks assigned to the current user
                ->groupBy('t_projects.id', 't_projects.name', 't_projects.description', 't_projects.created_at', 't_projects.updated_at')
                ->get();
        }

        return view('projects.index')->with(['projects' => $projects]);
    }

    public static function users()
    {
        $users = User::get();
        return view('users.index')->with(['users' => $users]);
    }

    public function store(Request $request)
    {
        // Validate form data
        $request->validate([
            'inp_pn' => 'required|string|max:255',  // Project name validation
            'inp_description' => 'nullable|string',      // Description can be null
            'inp_start_date' => 'required|date',      // Description can be null
            'inp_deadline' => 'required|date',      // Description can be null
        ]);

        // Create new project record
        Project::create([
            'name' => $request->inp_pn,
            'description' => $request->inp_description,
            'date_start' => $request->inp_start_date,
            'date_end' => $request->inp_deadline,
        ]);

        return redirect()->back()->with('success', 'Project record saved successfully.');
    }

    public function update(Request $request)
    {
        // Validate form data
        $request->validate([
            'inp_id' => 'required|exists:t_projects,id',
            'inp_pn' => 'required|string|max:255',
            'inp_description' => 'nullable|string',
            'inp_start_date' => 'required|date',      // Description can be null
            'inp_deadline' => 'required|date',      // Description can be null
        ]);

        // Find and update the project
        $project = Project::find($request->inp_id);
        if ($project) {
            $project->update([
                'name' => $request->inp_pn,
                'description' => $request->inp_description,
                'date_start' => $request->inp_start_date,
                'date_end' => $request->inp_deadline,
            ]);

            return redirect()->back()->with('success', 'Project Updated successfully.');
        }

        // Handle the case where the project is not found
        return redirect()->back()->with('error', 'Project not found.');
    }
}
