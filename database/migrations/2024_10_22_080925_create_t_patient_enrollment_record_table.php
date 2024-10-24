<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('t_patient_enrollment_record', function (Blueprint $table) {

                $table->id('per_id');
                $table->string('per_last_name');
                $table->string('per_first_name');
                $table->string('per_middle_name');
                $table->string('per_extension');
                $table->string('per_region');
                $table->string('per_maiden_name');
                $table->string('per_mothers_name'); 
                $table->string('per_complete_address');
                $table->string('per_mobile_no');
                $table->date('per_birth_date'); 
                $table->string('per_birth_place');
                $table->integer('per_age');
                $table->string('per_gender');
                $table->string('per_civil');
                $table->string('per_family');
                $table->string('per_blood_type');
                $table->string('per_religion');
                $table->string('per_phic_member');
                $table->string('per_philhealth_member_type');
                $table->string('per_philhealth_number');
                $table->string('per_philhealth_membership');
                $table->string('per_konsulta_registered');
                $table->string('per_konsulta_facility');
                $table->string('per_employment_status');
                $table->string('per_dswd_nhts');
                $table->string('per_4ps_member');
                $table->string('per_facility_household_no');
                $table->string('per_household_no');
                $table->string('per_educational_attainment');
                $table->integer('per_bp');
                $table->integer('per_hr');
                $table->integer('per_rr');
                $table->integer('per_pulse_rate');
                $table->integer('per_temp');
                $table->integer('per_height');
                $table->integer('per_weight');
                $table->integer('per_ox_sat');
                $table->string('per_administered_by');
                $table->string('per_last_name_duplicate'); 
                $table->string('per_first_name_duplicate'); 
                $table->string('per_suffix');
                $table->string('per_middle_name_duplicate'); 
                $table->string('per_relationship');
                $table->date('per_date_of_birth'); 
                $table->string('per_postal_code');
                $table->string('per_regions');
                $table->string('per_province');
                $table->string('per_city_or_municipality');
                $table->string('per_barangay');
                $table->string('per_family_history');
                $table->string('per_past_medical_history');
                $table->string('per_past_surgical_history');
                $table->string('per_children_immunized');
                $table->string('per_pregnant_tetanus_toxoid');
                $table->string('per_covid_vaccine_5_years_above');
                $table->string('per_smoking');
                $table->string('per_sexually_active');
                $table->string('per_alcohol');
                $table->string('per_illicit_drugs');
                $table->string('per_menarche');
                $table->date('per_last_menstrual_period');
                $table->string('per_onset_sexual_intercourse');
                $table->string('per_menopause');
                $table->string('per_family_planning_method');
                $table->integer('per_gravity'); 
                $table->integer('per_parity');
                $table->string('per_type_of_delivery');
                $table->integer('per_no_of_full_term');
                $table->integer('per_no_of_premature');
                $table->integer('per_no_of_abortion');
                $table->integer('per_no_of_living_children');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_patient_enrollment_record');
    }
};
