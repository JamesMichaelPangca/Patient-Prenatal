<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrenatalVisitRecord;
class PrenatalVisitRecordController extends Controller
{
    public static function index(){
        $prenatal = PrenatalVisitRecord::get();
        return view('pages.prenatalVisitRecord.index')->with(['prenatal' => $prenatal]);
    }

    public static function store(Request $request){

        // Validate the request
        $request->validate([
            'inp_name' => 'required|string|max:255',
            'inp_age' => 'required|string|max:255',
            'inp_birthday' => 'required|string|max:255',
            'inp_fsn' =>'required|string|max:255',
            'inp_mn' => 'required|string|max:255',
            'inp_husband' => 'required|string|max:255',
            'inp_cs' => 'required|string|max:255',
            'inp_address' => 'required|string|max:255',
            'inp_cn' => 'required|string|max:25',
            'inp_los' => 'required|string|max:255',
            'inp_landlord' => 'required|string|max:255',
            'inp_fn' => 'required|string|max:255',
            'inp_fa' => 'required|string|max:255',
            'inp_mns' => 'required|string|max:255',
            'inp_ma' => 'required|string|max:255',
            'inp_pn' =>'required|string|max:255',
            'inp_pm' => 'required|string|max:255',
            'inp_4on' =>'required|string|max:255',
            'inp_n4on' => 'required|string|max:255',
            'inp_religion' => 'required|string|max:255',
            'inp_es' => 'required|string|max:255',
            'inp_date' => 'required|date',
            'inp_ht' => 'required|string|max:255',
            'inp_temp' => 'required|string|max:255',
            'inp_pr' => 'required|string|max:255',
            'inp_rr' => 'required|string|max:255',
            'inp_bp' => 'required|string|max:255',
            'inp_menarche' => 'required|string|max:255',
            'inp_lmp' =>'required|string|max:255',
            'inp_gravida' =>'required|string|max:255',
            'inp_para' => 'required|string|max:255',
            'inp_ft' => 'required|string|max:255',
            'inp_abortion' => 'required|string|max:255',
            'inp_sb' => 'required|string|max:255',
            'inp_lr' => 'required|string|max:255',
            'inp_hgb' => 'required|string|max:255',
            'inp_ua' => 'required|string|max:255',
            'inp_vdrl' => 'required|string|max:255',
            'inp_hxff' => 'required|string|max:255',
            'inp_edc' => 'required|string|max:255',
            'inp_aog' =>'required|string|max:255',
            'inp_dold' => 'required|string|max:255',
            'inp_pold' => 'required|string|max:255',
            'inp_t1' => 'nullable|string|max:255',
            'inp_t2' => 'nullable|string|max:255',
            'inp_t3' => 'nullable|string|max:255',
            'inp_t4' => 'nullable|string|max:255',
            'inp_t5' => 'nullable|string|max:255',
            'inp_fim' => 'required|string|max:255',
            'inp_sr' => 'required|string|max:255',
            'inp_hotf' => 'required|string|max:255',
            'inp_ohia' => 'required|string|max:255',
            'inp_gravidas' =>'required|string|max:255',
            'inp_dates' => 'required|date',
            'inp_outcome' => 'required|string|max:255',
            'inp_gp' => 'required|string|max:255',
            'inp_pods' => 'required|string|max:255',
        ]);

        // Save customer record
        PrenatalVisitRecord::create([
            'pvr_name'=> $request->inp_name,
            'pvr_age'=> $request->inp_age,
            'pvr_birthday'=> $request->inp_birthday,
            'pvr_family_serial_no'=> $request->inp_fsn,
            'pvr_maiden_name'=> $request->inp_mn,
            'pvr_husband'=> $request->inp_husband,
            'pvr_civil_status'=> $request->inp_cs,
            'pvr_address'=> $request->inp_address,
            'pvr_cellphone_no'=> $request->inp_cn,
            'pvr_length_of_stay'=> $request->inp_los,
            'pvr_landlord'=> $request->inp_landlord,
            'pvr_father_name'=> $request->inp_fn,
            'pvr_father_address'=> $request->inp_fa,
            'pvr_mother_name'=> $request->inp_mns,
            'pvr_mother_address'=> $request->inp_ma,
            'pvr_philhealth_no'=> $request->inp_pn,
            'pvr_philhealth_membership'=> $request->inp_pm,
            'pvr_4ps_or_nhts'=> $request->inp_4on,
            'pvr_non_4ps_or_nhts'=> $request->inp_n4on,
            'pvr_religion'=> $request->inp_religion,
            'pvr_employment_status'=> $request->inp_es,
            'pvr_date'=> $request->inp_date,
            'pvr_ht'=> $request->inp_ht,
            'pvr_temp'=> $request->inp_temp,
            'pvr_pr'=> $request->inp_pr,
            'pvr_rr'=> $request->inp_rr,
            'pvr_bp'=> $request->inp_bp,
            'pvr_menarche'=> $request->inp_menarche,
            'pvr_lmp'=> $request->inp_lmp,
            'pvr_gravida'=> $request->inp_gravida,
            'pvr_para'=> $request->inp_para,
            'pvr_full_term'=> $request->inp_ft,
            'pvr_abortion'=> $request->inp_abortion,
            'pvr_still_birth'=> $request->inp_sb,
            'pvr_lab_results'=> $request->inp_lr,
            'pvr_hgb'=> $request->inp_hgb,
            'pvr_u'=> $request->inp_ua,
            'pvr_vdrl'=> $request->inp_vdrl,
            'pvr_hx_of__the_ff'=> $request->inp_hxff,
            'pvr_edc'=> $request->inp_edc,
            'pvr_aog'=> $request->inp_aog,
            'pvr_date_of_last_delivery'=> $request->inp_dold,
            'pvr_place_of_last_delivery'=> $request->inp_pold,
            'pvr_t1'=> $request->inp_t1,
            'pvr_t2'=> $request->inp_t2,
            'pvr_t3'=> $request->inp_t3,
            'pvr_t4'=> $request->inp_t4,
            'pvr_t5'=> $request->inp_t5,
            'pvr_fim'=> $request->inp_fim,
            'pvr_sti_risk'=> $request->inp_sr,
            'pvr_hix_of_the_ff'=> $request->inp_hotf,
            'pvr_ob_historical_including_abortion'=> $request->inp_ohia,
            'pvr_gravidad'=> $request->inp_gravidas,
            'pvr_dated'=> $request->inp_dates,
            'pvr_outcome'=> $request->inp_outcome,
            'pvr_gender_presentation'=> $request->inp_gp,
            'pvr_place_of_delivery'=> $request->inp_pods,
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Prenatal Visit Record added successfully!');
    }
}

