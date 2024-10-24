<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Task;
use App\Models\Project;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth; // Import the Auth facade

class TaskController extends Controller
{
    // List all tasks
    public function index($id)
    {

        $project = Project::where('id', $id)->first();;
        $tasks_pending = Task::join('users', 'users.id', 'user_assign_id')->select('users.id as uid', 'users.name', 't_tasks.*')->where('proj_id', $id)->where('status', 'Pending')->get();
        $tasks_ongoing = Task::join('users', 'users.id', 'user_assign_id')->select('users.id as uid', 'users.name', 't_tasks.*')->where('proj_id', $id)->where('status', 'On-going')->get();
        $tasks_completed = Task::join('users', 'users.id', 'user_assign_id')->select('users.id as uid', 'users.name', 't_tasks.*')->where('proj_id', $id)->where('status', 'Done')->get();

        $gantt = Task::join('users', 'users.id', 'user_assign_id')->select('users.id as uid', 'users.name', 't_tasks.*')->where('proj_id', $id)->get();

        if (Auth::user()->account_type == 'Member') {
            $tasks_pending = Task::join('users', 'users.id', 'user_assign_id')->select('users.id as uid', 'users.name', 't_tasks.*')->where('proj_id', $id)->where('status', 'Pending')->where('user_assign_id', Auth::user()->id)->get();
            $tasks_ongoing = Task::join('users', 'users.id', 'user_assign_id')->select('users.id as uid', 'users.name', 't_tasks.*')->where('proj_id', $id)->where('status', 'On-going')->where('user_assign_id', Auth::user()->id)->get();
            $tasks_completed = Task::join('users', 'users.id', 'user_assign_id')->select('users.id as uid', 'users.name', 't_tasks.*')->where('proj_id', $id)->where('status', 'Done')->where('user_assign_id', Auth::user()->id)->get();

            $gantt = Task::join('users', 'users.id', 'user_assign_id')->select('users.id as uid', 'users.name', 't_tasks.*')->where('proj_id', $id)->where('user_assign_id', Auth::user()->id)->get();
        }

        $users = User::where('account_type', 'Member')->get();

        return view('tasks.index')->with([
            'id' =>  $id,
            'project' => $project,
            'pending' => $tasks_pending,
            'ongoing' => $tasks_ongoing,
            'completed' => $tasks_completed,
            'users' => $users,
            'grantt' => $gantt
        ]);
    }

    public function print($id)
    {
        $project = Project::where('id', $id)->first();;
        $tasks_pending = Task::join('users', 'users.id', 'user_assign_id')->select('users.id as uid', 't_task.*')->where('proj_id', $id)->where('status', 'Pending')->get();
        $tasks_ongoing = Task::join('users', 'users.id', 'user_assign_id')->where('proj_id', $id)->where('status', 'On-going')->get();
        $tasks_completed = Task::join('users', 'users.id', 'user_assign_id')->where('proj_id', $id)->where('status', 'Done')->get();

        return view('projects.print')->with([
            'id' =>  $id,
            'project' => $project,
            'pending' => $tasks_pending,
            'ongoing' => $tasks_ongoing,
            'completed' => $tasks_completed,
        ]);
    }

    // Store a new task
    public function store(Request $request)
    {
        // Validate the form inputs
        $request->validate([
            'inp_id' => 'required', // Project ID
            'inp_task' => 'required|string|max:255', // Task title
            'inp_assign' => 'required|max:255', // Assigned user
            'inp_start_date' => 'required|date|after_or_equal:today', // Task start date
            'inp_deadline' => 'required|date|after_or_equal:today', // Task deadline
        ]);

        $startDate = Carbon::parse($request->inp_start_date);
        $endDate = Carbon::parse($request->inp_deadline);

        // Get the project's date range based on the project ID
        $project = DB::table('t_projects')
            ->where('id', $request->inp_id)
            ->select('date_start', 'date_end')
            ->first();

        // If project not found
        if (!$project) {
            return redirect()->back()->with('error', 'Project not found!');
        }

        // Convert project dates to Carbon for comparison
        $projectStartDate = Carbon::parse($project->date_start);
        $projectEndDate = Carbon::parse($project->date_end);

        // Check if the task dates are within the project date range
        if ($startDate->lt($projectStartDate) || $endDate->gt($projectEndDate)) {
            return redirect()->back()->with('error', 'Task dates are outside the project date range!');
        }

        // Check if there is an overlap with existing tasks in the same project
        $overlap = DB::table('t_tasks')
            ->where('proj_id', $request->inp_id) // Check tasks within the same project
            ->where(function ($query) use ($startDate, $endDate) {
                $query->whereBetween('startdate', [$startDate, $endDate])
                    ->orWhereBetween('deadline', [$startDate, $endDate])
                    ->orWhere(function ($query) use ($startDate, $endDate) {
                        $query->where('startdate', '<=', $startDate)
                            ->where('deadline', '>=', $endDate);
                    });
            })
            ->exists(); // Check if any task overlaps with the new task

        if ($overlap) {
            return redirect()->back()->with('error', 'There is an overlap with an existing task within the project!');
        }

        // Proceed to create the task if validation passes
        Task::create([
            'proj_id' => $request->inp_id,
            'user_assign_id' => $request->inp_assign,
            'title' => $request->inp_task,
            'startdate' => $request->inp_start_date,
            'deadline' => $request->inp_deadline,
            'status' => 'Pending',
        ]);

        return redirect()->back()->with('success', 'Task created successfully!');
    }



    public function update(Request $request)
    {
        // Validate the form inputs
        $request->validate([
            'inp_proj_id' => 'required', // Project ID
            'inp_uid' => 'required', // Project ID
            'inp_task' => 'required|string|max:255', // Task title
            'inp_assign' => 'required|max:255', // Assigned user
            'inp_start_date' => 'required|date|after_or_equal:today', // Task start date
            'inp_deadline' => 'required|date|after_or_equal:today', // Task deadline
        ]);

        $startDate = Carbon::parse($request->inp_start_date);
        $endDate = Carbon::parse($request->inp_deadline);

        // Get the project's date range based on the project ID
        $project = DB::table('t_projects')
            ->where('id', $request->inp_proj_id)
            ->select('date_start', 'date_end')
            ->first();

        // If project not found
        if (!$project) {
            return redirect()->back()->with('error', 'Project not found!');
        }

        // Convert project dates to Carbon for comparison
        $projectStartDate = Carbon::parse($project->date_start);
        $projectEndDate = Carbon::parse($project->date_end);

        // Check if the task dates are within the project date range
        if ($startDate->lt($projectStartDate) || $endDate->gt($projectEndDate)) {
            return redirect()->back()->with('error', 'Task dates are outside the project date range!');
        }

        // Check if there is an overlap with existing tasks in the same project
        $overlap = DB::table('t_tasks')
            ->where('proj_id', $request->inp_id) // Check tasks within the same project
            ->where(function ($query) use ($startDate, $endDate) {
                $query->whereBetween('startdate', [$startDate, $endDate])
                    ->orWhereBetween('deadline', [$startDate, $endDate])
                    ->orWhere(function ($query) use ($startDate, $endDate) {
                        $query->where('startdate', '<=', $startDate)
                            ->where('deadline', '>=', $endDate);
                    });
            })
            ->exists(); // Check if any task overlaps with the new task

        if ($overlap) {
            return redirect()->back()->with('error', 'There is an overlap with an existing task within the project!');
        }

        // Proceed to create the task if validation passes
        Task::where('id', $request->inp_uid)->update([
            'user_assign_id' => $request->inp_assign,
            'title' => $request->inp_task,
            'startdate' => $request->inp_start_date,
            'deadline' => $request->inp_deadline,
        ]);

        return redirect()->back()->with('success', 'Task Updated successfully!');
    }
}
