<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrenatalVisitRecord extends Model
{
    use HasFactory;
    protected $table = 't_prenatal_visit_record';
    protected $fillable = [
        'pvr_name',
        'pvr_age',
        'pvr_birthday',
        'pvr_family_serial_no',
        'pvr_maiden_name',
        'pvr_husband',
        'pvr_civil_status',
        'pvr_address',
        'pvr_cellphone_no',
        'pvr_length_of_stay',
        'pvr_landlord',
        'pvr_father_name',
        'pvr_father_address',
        'pvr_mother_name',
        'pvr_mother_address',
        'pvr_philhealth_no',
        'pvr_philhealth_membership',
        'pvr_4ps_or_nhts',
        'pvr_non_4ps_or_nhts',
        'pvr_religion',
        'pvr_employment_status',
        'pvr_date',
        'pvr_ht',
        'pvr_temp',
        'pvr_pr',
        'pvr_rr',
        'pvr_bp',
        'pvr_menarche',
        'pvr_lmp',
        'pvr_gravida',
        'pvr_para',
        'pvr_full_term',
        'pvr_abortion',
        'pvr_still_birth',
        'pvr_lab_results',
        'pvr_hgb',
        'pvr_u',
        'pvr_vdrl',
        'pvr_hx_of__the_ff',
        'pvr_edc',
        'pvr_aog',
        'pvr_date_of_last_delivery',
        'pvr_place_of_last_delivery',
        'pvr_t1',
        'pvr_t2',
        'pvr_t3',
        'pvr_t4',
        'pvr_t5',
        'pvr_fim',
        'pvr_sti_risk',
        'pvr_hix_of_the_ff',
        'pvr_ob_historical_including_abortion',
        'pvr_gravidad',
        'pvr_dated',
        'pvr_outcome',
        'pvr_gender_presentation',
        'pvr_place_of_delivery',
    ];
}
