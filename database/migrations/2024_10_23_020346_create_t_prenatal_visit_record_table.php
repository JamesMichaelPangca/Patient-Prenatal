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
        Schema::create('t_prenatal_visit_record', function (Blueprint $table) {
            $table->id('prv_id');
            $table->string('pvr_name');                        // Name of the patient
            $table->integer('pvr_age');                        // Age of the patient
            $table->date('pvr_birthday');                     // Birthday of the patient
            $table->string('pvr_family_serial_no')->nullable(); // Family serial number
            $table->string('pvr_maiden_name')->nullable();     // Maiden name
            $table->string('pvr_husband')->nullable();         // Husband's name
            $table->string('pvr_civil_status');                // Civil status
            $table->string('pvr_address');                       // Address
            $table->string('pvr_cellphone_no');                // Cellphone number
            $table->string('pvr_length_of_stay')->nullable(); // Length of stay
            $table->string('pvr_landlord')->nullable();        // Landlord's name
            $table->string('pvr_father_name')->nullable();     // Father's name
            $table->string('pvr_father_address')->nullable();    // Father's address
            $table->string('pvr_mother_name')->nullable();     // Mother's name
            $table->string('pvr_mother_address')->nullable();    // Mother's address
            $table->string('pvr_philhealth_no')->nullable();   // PhilHealth number
            $table->string('pvr_philhealth_membership')->nullable(); // PhilHealth membership
            $table->string('pvr_4ps_or_nhts')->nullable();    // 4Ps or NHTS status
            $table->string('pvr_non_4ps_or_nhts')->nullable(); // Non-4Ps or NHTS status
            $table->string('pvr_religion')->nullable();        // Religion
            $table->string('pvr_employment_status')->nullable(); // Employment status
            $table->date('pvr_date');                          // Date of the visit
            $table->integer('pvr_ht')->nullable();               // Height
            $table->integer('pvr_temp')->nullable();             // Temperature
            $table->integer('pvr_pr')->nullable();             // Pulse rate
            $table->integer('pvr_rr')->nullable();             // Respiratory rate
            $table->string('pvr_bp')->nullable();              // Blood pressure
            $table->integer('pvr_menarche')->nullable();       // Age at menarche
            $table->date('pvr_lmp')->nullable();               // Last menstrual period
            $table->integer('pvr_gravida')->nullable();        // Gravida count
            $table->integer('pvr_para')->nullable();           // Para count
            $table->string('pvr_full_term')->nullable();      // Full term status
            $table->integer('pvr_abortion')->nullable();       // Number of abortions
            $table->integer('pvr_still_birth')->nullable();    // Number of stillbirths
            $table->text('pvr_lab_results')->nullable();       // Lab results
            $table->integer('pvr_hgb')->nullable();              // Hemoglobin level
            $table->string('pvr_u')->nullable();               // Urinalysis results
            $table->string('pvr_vdrl')->nullable();            // VDRL results
            $table->text('pvr_hx_of__the_ff')->nullable();     // History of family factors
            $table->date('pvr_edc')->nullable();               // Estimated date of confinement
            $table->integer('pvr_aog')->nullable();              // Age of gestation
            $table->date('pvr_date_of_last_delivery')->nullable(); // Date of last delivery
            $table->string('pvr_place_of_last_delivery')->nullable(); // Place of last delivery
            $table->string('pvr_t1')->nullable();              // TT1
            $table->string('pvr_t2')->nullable();              // TT2
            $table->string('pvr_t3')->nullable();              // TT3
            $table->string('pvr_t4')->nullable();              // TT4
            $table->string('pvr_t5')->nullable();              // TT5
            $table->integer('pvr_fim')->nullable();           // FIM score
            $table->string('pvr_sti_risk')->nullable();       // STI risk status
            $table->string('pvr_hix_of_the_ff')->nullable();     // History of family factors
            $table->string('pvr_ob_historical_including_abortion')->nullable(); // OB history including abortion
            $table->integer('pvr_gravidad')->nullable();        // Gravida count
            $table->date('pvr_dated');                          // Date of the visit
            $table->string('pvr_outcome')->nullable();         // Outcome of the pregnancy
            $table->string('pvr_gender_presentation')->nullable(); // Gender presentation
            $table->string('pvr_place_of_delivery')->nullable(); // Place of delivery
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_prenatal_visit_record');
    }
};
