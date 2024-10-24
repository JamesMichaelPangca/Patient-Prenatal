<x-app-layout>
    <x-slot name="back"></x-slot>
    <x-slot name="header">{{ __('Patient Enrollment Record') }}</x-slot>
    <x-slot name="subHeader">{{ __('You can manage your patient enrollment record and register new patient enrollment record here.') }}</x-slot>
    <x-slot name="btn">
        <div class="toggle-wrap nk-block-tools-toggle">
            <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em
                    class="icon ni ni-more-v"></em></a>
            <div class="toggle-expand-content" data-content="pageMenu">
                <ul class="nk-block-tools g-3">
                    <li class="nk-block-tools-opt">
                        <button class="btn btn-primary btn-round" data-bs-toggle="modal" data-bs-target="#registration">
                            <em class="icon ni ni-plus-circle"></em>&ensp;
                            Register New Patient Enrollment Record
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </x-slot>

    <div class="nk-block">
        <div class="row g-gs">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-inner">
                        @if ($errors->any())
                            <div class="alert alert-pro alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <table class="datatable-init-export table">
                        <thead>
                          <tr>
                          <th width="20">#</th>
                          <th>Last Name</th>
                          <th>First Name</th>
                           <th>Middle Name</th>
                          <th>Extension</th>
                          <th>Region</th>
                          <th>Please Write Maiden Name </th>
                          <th>Mother's Name</th>
                           <th>Complete Address</th>
                          <th>Mobile No</th>
                          <th>Birth Date</th>
                          <th>Birth Place</th>
                          <th>Age </th>
                           <th>Gender</th>
                          <th>Civil Status</th>
                          <th>Family Member</th>
                          <th>Blood Type</th>
                          <th>Religion</th>
                           <th>PHIC Member</th>
                          <th>Philhealth Member Type</th>
                          <th>Philhealth Number</th>
                          <th>Philhealth Membership </th>
                          <th>Konsulta Registered </th>
                           <th>Konsulta Facility</th>
                          <th>Employment Status </th>
                          <th>DSWD NHTS</th>
                          <th>4Ps Member </th>
                          <th>Facility Household No</th>
                           <th>Household No</th>
                          <th>Educational Attainment </th>
                          <th>BP </th>
                          <th>HR</th>
                          <th>RR</th>
                           <th>Pulse Rate</th>
                          <th>Temp </th>
                          <th>Height</th>
                          <th>Weight </th>
                          <th>Ox Sat </th>
                           <th>Administered by</th>
                          <th>Last Name</th>
                          <th>First Name</th>
                          <th>Suffix</th>
                          <th>Middle Name</th>
                           <th>Relationship</th>
                          <th>Date Of Birth </th>
                          <th>Postal Code</th>
                          <th>Region</th>
                          <th>Province</th>
                           <th>City or Municipality </th>
                          <th>Barangay </th>
                          <th>Family History </th>
                          <th>Past Medical History </th>
                          <th>Past Surgical History </th>
                           <th>For Children Completely Immunized</th>
                          <th>For Pregnant Tenanus Toxoid</th>
                          <th>For 5 Years Old & Above Covid-19 Vaccine</th>
                          <th>Smoking </th>
                          <th>Sexually Active</th>
                           <th>Alcohol </th>
                          <th>Illicit Drugs </th>
                          <th>Menarche </th>
                          <th>Last menstural period </th>
                          <th>Onset Sexual Intercourse</th>
                           <th>Menopause </th>
                          <th>Family Planning Method</th>
                          <th>Gravity(No. of Pregnancy) </th>
                          <th>Parity(No. Of Delivery)</th>
                          <th>Type of Delivery </th>
                           <th>No. of Full Term </th>
                          <th>No. of Premature</th>
                          <th>No. of Abortion</th>
                          <th>No. of Living Children </th>
                          <th width="100">Action</th>
                       </tr>
                        </thead>
                            <tbody>
                            @foreach ($patient as $data )
                                <tr style="cursor: pointer">    
                                <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->per_last_name }}</td>
                                    <td>{{ $data->per_first_name }}</td>
                                    <td>{{ $data->per_middle_name }}</td>
                                    <td>{{ $data->per_extension }}</td>
                                    <td>{{ $data->per_region }}</td>
                                    <td>{{ $data->per_maiden_name }}</td>
                                    <td>{{ $data->per_mothers_name }}</td>
                                    <td>{{ $data->per_complete_address }}</td>
                                    <td>{{ $data->per_mobile_no}}</td>
                                    <td>{{ $data->per_birth_date}}</td>
                                    <td>{{ $data->per_birth_place }}</td>
                                    <td>{{ $data->per_age }}</td>
                                    <td>{{ $data->per_gender }}</td>
                                    <td>{{ $data->per_civil }}</td>
                                    <td>{{ $data->per_family }}</td>
                                    <td>{{ $data->per_blood_type }}</td>
                                    <td>{{ $data->per_religion }}</td>
                                    <td>{{ $data->per_phic_member }}</td>
                                    <td>{{ $data->per_philhealth_member_type }}</td>
                                    <td>{{ $data->per_philhealth_number }}</td>
                                    <td>{{ $data->per_philhealth_membership}}</td>
                                    <td>{{ $data->per_konsulta_registered}}</td>
                                    <td>{{ $data->per_konsulta_facility }}</td>
                                    <td>{{ $data->per_employment_status }}</td>
                                    <td>{{ $data->per_dswd_nhts }}</td>
                                    <td>{{ $data->per_4ps_member }}</td>
                                    <td>{{ $data->per_facility_household_no }}</td>
                                    <td>{{ $data->per_household_no }}</td>
                                    <td>{{ $data->per_educational_attainment }}</td>
                                    <td>{{ $data->per_bp }}</td>
                                    <td>{{ $data->per_hr}}</td>
                                    <td>{{ $data->per_rr}}</td>
                                    <td>{{ $data->per_pulse_rate }}</td>
                                    <td>{{ $data->per_temp }}</td>
                                    <td>{{ $data->per_height }}</td>
                                    <td>{{ $data->per_weight }}</td>
                                    <td>{{ $data->per_ox_sat }}</td>
                                    <td>{{ $data->per_administered_by }}</td>
                                    <td>{{ $data->per_last_name_duplicate }}</td>
                                    <td>{{ $data->per_first_name_duplicate }}</td>
                                    <td>{{ $data->per_suffix}}</td>
                                    <td>{{ $data->per_middle_name_duplicate}}</td>
                                    <td>{{ $data->per_relationship }}</td>
                                    <td>{{ $data->per_date_of_birth }}</td>
                                    <td>{{ $data->per_postal_code }}</td>
                                    <td>{{ $data->per_regions }}</td>
                                    <td>{{ $data->per_province }}</td>
                                    <td>{{ $data->per_city_or_municipality }}</td>
                                    <td>{{ $data->per_barangay }}</td>
                                    <td>{{ $data->per_family_history }}</td>
                                    <td>{{ $data->per_past_medical_history}}</td>
                                    <td>{{ $data->per_past_surgical_history}}</td>
                                    <td>{{ $data->per_children_immunized }}</td>
                                    <td>{{ $data->per_pregnant_tetanus_toxoid }}</td>
                                    <td>{{ $data->per_covid_vaccine_5_years_above }}</td>
                                    <td>{{ $data->per_smoking }}</td>
                                    <td>{{ $data->per_sexually_active }}</td>
                                    <td>{{ $data->per_alcohol }}</td>
                                    <td>{{ $data->per_illicit_drugs }}</td>
                                    <td>{{ $data->per_menarche }}</td>
                                    <td>{{ $data->per_last_menstrual_period}}</td>
                                    <td>{{ $data->per_onset_sexual_intercourse}}</td>
                                    <td>{{ $data->per_menopause }}</td>
                                    <td>{{ $data->per_family_planning_method }}</td>
                                    <td>{{ $data->per_gravity }}</td>
                                    <td>{{ $data->per_parity }}</td>
                                    <td>{{ $data->per_type_of_delivery }}</td>
                                    <td>{{ $data->per_no_of_full_term }}</td>
                                    <td>{{ $data->per_no_of_premature }}</td>
                                    <td>{{ $data->per_no_of_abortion }}</td>
                                    <td>{{ $data->per_no_of_living_children}}</td>
                                    </tr>
                                 @endforeach      
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="registration">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal">
                    <em class="icon ni ni-cross-sm"></em>
                </a>
                <div class="modal-body">
                    <h1 class="nk-block-title page-title text-2xl">
                        Patient enrollment record
                    </h1>
                    <p>You can create new  Patient enrollment record to monitor.</p>
                    <hr class="mt-2 mb-2">
   
 <form  action="{{ route('patient.save') }}" method="POST">
    @csrf
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_ln">Last Name <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Last Name here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_ln" name="inp_ln" placeholder="Enter (Required) Last Name here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_fn">First Name <b class="text-danger">*</b></label>
                <span class="form-note">Specify the First Name here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_fn" name="inp_fn" placeholder="Enter (Required) First Name here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_mn">Middle Name <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Middle Name here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_mn" name="inp_mn" placeholder="Enter (Required) Middle Name here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_extension">Extension <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Extension here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <select class="form-select" id="inp_extension" name="inp_extension"Required>
                <option value="" data-select2-id="3" style="text-transform: uppercase !important;">-- SELECT EXTENSION --</option>
                    <option value="Jr" data-select2-id="16">Jr</option>
                <option value="Sr" data-select2-id="16">Sr</option>
                <option value="etc" data-select2-id="16">etc</option>
            </select>
                
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_region">Region <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Region here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_region" name="inp_region" placeholder="Enter (Required) Region here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_pwmnmw">Please Write Maiden Name(For Married Women) <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Please Write Maiden Name(For Married Women) here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_pwmnmw" name="inp_pwmnmw" placeholder="Enter (Required) Please Write Maiden Name(For Married Women) here.. " Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_mnni">Mother's Name(Pangalan ng Ina) <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Mother's Name(Pangalan ng Ina) here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_mnni" name="inp_mnni" placeholder="Enter (Required) Mother's Name(Pangalan ng Ina) here.. " Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_ca">Complete Address <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Complete Address here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_ca" name="inp_ca" placeholder="Enter (Required) Complete Address here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_mne">Mobile No <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Mobile No here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number" pattern="[0-9]" class="form-control" id="inp_mne" name="inp_mne" placeholder="Enter (Required) Mobile No here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_bd">Birth Date <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Birth Date here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap focused">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-calendar-alt"></em>
                </div>
                <input type="text" data-date-format="yyyy-mm-dd" id="inp_bd" name="inp_bd" placeholder="YYYY-MM-DD" class="form-control date-picker" Required>
            </div>
                
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_bp">Birth Place <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Birth Place here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_bp" name="inp_bp" placeholder="Enter (Required) Birth Place here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_age">Age <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Age here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number" pattern="[0-9]" class="form-control" id="inp_age" name="inp_age" placeholder="Enter (Required) Age here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_gender">Gender <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Gender here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <select class="form-select" id="inp_gender" name="inp_gender"Required>
                <option value="" data-select2-id="3" style="text-transform: uppercase !important;" >-- SELECT GENDER --</option>
                    <option value="Male" data-select2-id="16">Male</option>
                <option value="Female" data-select2-id="16">Female</option>
            </select>
                
        </div>
    </div>    

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_civil">Civil Status <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Civil Status here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">  
            
            <select class="form-select" id="inp_civil" name="inp_civil"Required>
                <option value="" data-select2-id="3" style="text-transform: uppercase !important;">-- SELECT CIVIL STAUTS --</option>
                    <option value="Single" data-select2-id="16">Single</option>
                <option value="Married" data-select2-id="16">Married</option>
                <option value="Legally Separeted" data-select2-id="16">Legally Separeted</option>
                <option value="Annulled" data-select2-id="16">Annulled</option>
                <option value="Widow/er" data-select2-id="16">Widow/er</option>
                <option value="Co-Habitation" data-select2-id="16">Co-Habitation</option>
            </select>
                
        </div>
    </div>  

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_family">Family Member<b class="text-danger">*</b></label>
                <span class="form-note">Specify the Family Member here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            <select class="form-select" id="inp_family" name="inp_family"Required>
                <option value="" data-select2-id="3" style="text-transform: uppercase !important;">-- SELECT FAMILY MEMBER --</option>
                    <option value="Father" data-select2-id="16">Father</option>
                <option value="Son" data-select2-id="16">Son</option>
                <option value="Daughter" data-select2-id="16">Daughter</option>
                <option value="Mother" data-select2-id="16">Mother</option>
                <option value="Others" data-select2-id="16">Others</option>
            </select>
                
        </div>
    </div>  


    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_bt">Blood Type <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Blood Type here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_bt" name="inp_bt" placeholder="Enter (Required) Blood Type here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_religion">Religion <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Religion here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_religion" name="inp_religion" placeholder="Enter (Required) Religion here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_pm">PHIC Member <b class="text-danger">*</b></label>
                <span class="form-note">Specify the PHIC Member here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <select class="form-select" id="inp_pm" name="inp_pm"Required>
                <option value="" data-select2-id="3" style="text-transform: uppercase !important;">-- SELECT PHIC MEMBER --</option>
                    <option value="Yes" data-select2-id="16">Yes</option>
                <option value="No" data-select2-id="16">No</option>
            </select>
                
        </div>
    </div>
    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_pmt">Philhealth Member Type <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Philhealth Member Type here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <select class="form-select" id="inp_pmt" name="inp_pmt" Required>
                <option value="" data-select2-id="3" style="text-transform: uppercase !important;" >-- SELECT PHILHEALTH MEMBER TYPE --</option>
                    <option value="Member" data-select2-id="16">Member</option>
                <option value="Dependent" data-select2-id="16">Dependent</option>
            </select>
                
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_pn">Philhealth Number <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Philhealth Number here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number" pattern="[0-9]" class="form-control" id="inp_pn" name="inp_pn" placeholder="Enter (Required) Philhealth Number here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_pme">Philhealth Membership <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Philhealth Membership here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <select class="form-select" id="inp_pme" name="inp_pme" Required>
                <option value="" data-select2-id="3" style="text-transform: uppercase !important;">-- SELECT PHILHEALTH MEMBERSHIP --</option>
                    <option value="Indirect Contributor" data-select2-id="16">Indirect Contributor</option>
                <option value="Direct Contributor" data-select2-id="16">Direct Contributor</option>
            </select>
                
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_kr">Konsulta Registered <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Konsulta Registered here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <select class="form-select" id="inp_kr" name="inp_kr"Required>
                <option value="" data-select2-id="3" style="text-transform: uppercase !important;">-- SELECT KONSULTA REGISTERED --</option>
                    <option value="Yes" data-select2-id="16">Yes</option>
                <option value="No" data-select2-id="16">No</option>
            </select>
                
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_kf">Konsulta Facility <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Konsulta Facility here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_kf" name="inp_kf" placeholder="Enter (Required) Konsulta Facility here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_es">Employment Status <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Employment Status here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <select class="form-select" id="inp_es" name="inp_es"Required>
                <option value="" data-select2-id="3" style="text-transform: uppercase !important;">-- SELECT EMPLOYMENT STATUS --</option>
                    <option value="Retired" data-select2-id="16">Retired</option>
                <option value="Student" data-select2-id="16">Student</option>
                <option value="Employed" data-select2-id="16">Employed</option>
                <option value="None" data-select2-id="16">None</option>
            </select>
                
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_dn">DSWD NHTS <b class="text-danger">*</b></label>
                <span class="form-note">Specify the DSWD NHTS here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <select class="form-select" id="inp_dn" name="inp_dn"Required>
                <option value="" data-select2-id="3" style="text-transform: uppercase !important;">-- SELECT DSWD NHTS --</option>
                    <option value="Yes" data-select2-id="16">Yes</option>
                <option value="No" data-select2-id="16">No</option>
            </select>
                
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_4m">4Ps Member <b class="text-danger">*</b></label>
                <span class="form-note">Specify the 4Ps Member here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <select class="form-select" id="inp_4m" name="inp_4m"Required>
                <option value="" data-select2-id="3" style="text-transform: uppercase !important;">-- SELECT 4PS MEMBER --</option>
                    <option value="Yes" data-select2-id="16">Yes</option>
                <option value="No" data-select2-id="16">No</option>
            </select>
                
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_fhn">Facility Household No <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Facility Household No here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number" pattern="[0-9]" class="form-control" id="inp_fhn" name="inp_fhn" placeholder="Enter (Required) Facility Household No here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_hne">Household No <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Household No here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number" pattern="[0-9]" class="form-control" id="inp_hne" name="inp_hne" placeholder="Enter (Required) Household No here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_ea">Educational Attainment <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Educational Attainment here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <select class="form-select" id="inp_ea" name="inp_ea"Required>
                <option value="" data-select2-id="3" style="text-transform: uppercase !important;">-- SELECT EDUCATIONAL ATTAINMENT --</option>
                    <option value="Post-College" data-select2-id="16">Post-College</option>
                <option value="College Graduate" data-select2-id="16">College Graduate</option>
                <option value="Vocational" data-select2-id="16">Vocational</option>
                <option value="Highschool Graduate" data-select2-id="16">Highschool Graduate</option>
                <option value="Elementary Graduate" data-select2-id="16">Elementary Graduate</option>
                <option value="No Formal Schooling" data-select2-id="16">No Formal Schooling</option>
            </select>
                
        </div>
    </div>    

    <br>
<label>Pertinent Physical Examination</label>
   <br>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_bpe">BP <b class="text-danger">*</b></label>
                <span class="form-note">Specify the BP here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number" pattern="[0-9]" class="form-control" id="inp_bpe" name="inp_bpe" placeholder="Enter (Required) BP here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_hr">HR <b class="text-danger">*</b></label>
                <span class="form-note">Specify the HR here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number" pattern="[0-9]" class="form-control" id="inp_hr" name="inp_hr" placeholder="Enter (Required) HR here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_rr">RR <b class="text-danger">*</b></label>
                <span class="form-note">Specify the RR here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number" pattern="[0-9]" class="form-control" id="inp_rr" name="inp_rr" placeholder="Enter (Required) RR here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_pr">Pulse Rate <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Pulse Rate here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number" pattern="[0-9]" class="form-control" id="inp_pr" name="inp_pr" placeholder="Enter (Required) Pulse Rate here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_temp">Temp <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Temp here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number" pattern="[0-9]" class="form-control" id="inp_temp" name="inp_temp" placeholder="Enter (Required) Temp here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_height">Height <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Height here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number" pattern="[0-9]" class="form-control" id="inp_height" name="inp_height" placeholder="Enter (Required) Height here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_weight">Weight <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Weight here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number" pattern="[0-9]" class="form-control" id="inp_weight" name="inp_weight" placeholder="Enter (Required) Weight here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_os">Ox Sat <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Ox Sat here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number" pattern="[0-9]" class="form-control" id="inp_os" name="inp_os" placeholder="Enter (Required) Ox Sat here.. " Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_ab">Administered by <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Administered by here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_ab" name="inp_ab" placeholder="Enter (Required) Administered by here.. "Required>
            </div>
            
        </div>
    </div>    

    <br>
<label>Declaration of Dependents</label>
    <br>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_lne">Last Name <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Last Name here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_lne" name="inp_lne" placeholder="Enter (Required) Last Name here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_fne">First Name <b class="text-danger">*</b></label>
                <span class="form-note">Specify the First Name here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_fne" name="inp_fne" placeholder="Enter (Required) First Name here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_suffix">Suffix <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Suffix here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_suffix" name="inp_suffix" placeholder="Enter (Required) Suffix here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_mns">Middle Name <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Middle Name here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_mns" name="inp_mns" placeholder="Enter (Required) Middle Name here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_relationship">Relationship <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Relationship here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_relationship" name="inp_relationship" placeholder="Enter (Required) Relationship here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_dob">Date Of Birth <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Date Of Birth here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap focused">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-calendar-alt"></em>
                </div>
                <input type="text" data-date-format="yyyy-mm-dd" id="inp_dob" name="inp_dob" placeholder="YYYY-MM-DD" class="form-control date-picker"Required>
            </div>
                
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_pc">Postal Code <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Postal Code here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number" pattern="[0-9]" class="form-control" id="inp_pc" name="inp_pc" placeholder="Enter (Required) Postal Code here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_regions">Region <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Region here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_regions" name="inp_regions" placeholder="Enter (Required) Region here.. "Required>
            </div>
            
        </div>
    </div>    

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_province">Province <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Province here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_province" name="inp_province" placeholder="Enter (Required) Province here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_com">City or Municipality <b class="text-danger">*</b></label>
                <span class="form-note">Specify the City or Municipality here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_com" name="inp_com" placeholder="Enter (Required) City or Municipality here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_barangay">Barangay <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Barangay here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_barangay" name="inp_barangay" placeholder="Enter (Required) Baranggay here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_fh">Family History <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Family History here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <select class="form-select" id="inp_fh" name="inp_fh" Required>
                <option value="" data-select2-id="3" style="text-transform: uppercase !important;">-- SELECT FAMILY HISTORY --</option>
                    <option value="None" data-select2-id="16">None</option>
                <option value="Allergy, Specify" data-select2-id="16">Allergy, Specify</option>
                <option value="Asthma" data-select2-id="16">Asthma</option>
                <option value="Cancer, Specify" data-select2-id="16">Cancer, Specify</option>
                <option value="Stroke/Aneurysm" data-select2-id="16">Stroke/Aneurysm</option>
                <option value="Heart Disease" data-select2-id="16">Heart Disease</option>
                <option value="Renal Disease" data-select2-id="16">Renal Disease</option>
                <option value="Diabetes Mellitus, meds" data-select2-id="16">Diabetes Mellitus, meds</option>
                <option value="lung Disease" data-select2-id="16">lung Disease</option>
                <option value="Epilepsy/Seizure" data-select2-id="16">Epilepsy/Seizure</option>
                <option value="Hepatitis, Specify" data-select2-id="16">Hepatitis, Specify</option>
                <option value="High Cholesterol" data-select2-id="16">High Cholesterol</option>
                <option value="Peptic Ulcer" data-select2-id="16">Peptic Ulcer</option>
                <option value="Pneumonia" data-select2-id="16">Pneumonia</option>
                <option value="Hypertension, meds" data-select2-id="16">Hypertension, meds</option>
                <option value="Thyroid Disease" data-select2-id="16">Thyroid Disease</option>
                <option value="Tuberculosis, Specify if PTB, What Category" data-select2-id="16">Tuberculosis, Specify if PTB, What Category</option>
                <option value="Urinary Tract Infection" data-select2-id="16">Urinary Tract Infection</option>
                <option value="Mental Illness" data-select2-id="16">Mental Illness</option>
                <option value="Others, Specify" data-select2-id="16">Others, Specify</option>
            </select>
                
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_pmh">Past Medical History <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Past Medical History here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <select class="form-select" id="inp_pmh" name="inp_pmh"Required>
                <option value="" data-select2-id="3" style="text-transform: uppercase !important;">-- SELECT PAST MEDICAL HISTORY --</option>
                    <option value="None" data-select2-id="16">None</option>
                <option value="Allergy, Specify" data-select2-id="16">Allergy, Specify</option>
                <option value="Asthma" data-select2-id="16">Asthma</option>
                <option value="Cancer, Specify" data-select2-id="16">Cancer, Specify</option>
                <option value="Stroke/Aneurysm" data-select2-id="16">Stroke/Aneurysm</option>
                <option value="Heart Disease" data-select2-id="16">Heart Disease</option>
                <option value="Renal Disease" data-select2-id="16">Renal Disease</option>
                <option value="Diabetes Mellitus, meds" data-select2-id="16">Diabetes Mellitus, meds</option>
                <option value="lung Disease" data-select2-id="16">lung Disease</option>
                <option value="Epilepsy/Seizure" data-select2-id="16">Epilepsy/Seizure</option>
                <option value="Hepatitis, Specify" data-select2-id="16">Hepatitis, Specify</option>
                <option value="High Cholesterol" data-select2-id="16">High Cholesterol</option>
                <option value="Peptic Ulcer" data-select2-id="16">Peptic Ulcer</option>
                <option value="Pneumonia" data-select2-id="16">Pneumonia</option>
                <option value="Hypertension, meds" data-select2-id="16">Hypertension, meds</option>
                <option value="Thyroid Disease" data-select2-id="16">Thyroid Disease</option>
                <option value="Tuberculosis, Specify if PTB, What Category" data-select2-id="16">Tuberculosis, Specify if PTB, What Category</option>
                <option value="Urinary Tract Infection" data-select2-id="16">Urinary Tract Infection</option>
                <option value="Mental Illness" data-select2-id="16">Mental Illness</option>
                <option value="Others, Specify" data-select2-id="16">Others, Specify</option>
            </select>
                
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_psh">Past Surgical History <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Past Surgical History here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap focused">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-calendar-alt"></em>
                </div>
                <input type="text" data-date-format="yyyy-mm-dd" id="inp_psh" name="inp_psh" placeholder="YYYY-MM-DD" class="form-control date-picker" Required>
            </div>
                
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_fcci">For Children Completely Immunized <b class="text-danger">*</b></label>
                <span class="form-note">Specify the For Children Completely Immunized here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <select class="form-select" id="inp_fcci" name="inp_fcci"Required>
                <option value="" data-select2-id="3" style="text-transform: uppercase !important;" >-- SELECT FOR CHILDREN COMPLETELY IMMUNIZED --</option>
                    <option value="Yes" data-select2-id="16">Yes</option>
                <option value="No" data-select2-id="16">No</option>
            </select>
                
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_fptt">For Pregnant Tenanus Toxoid <b class="text-danger">*</b></label>
                <span class="form-note">Specify the For Pregnant Tenanus Toxoid here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <select class="form-select" id="inp_fptt" name="inp_fptt" Required>
                <option value="" data-select2-id="3" style="text-transform: uppercase !important;">-- SELECT FOR PREGNANT TENANUS TOXOID --</option>
                    <option value="Yes" data-select2-id="16">Yes</option>
                <option value="No" data-select2-id="16">No</option>
            </select>
                
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_f5yo">For 5 Years Old & Above Covid-19  Vaccine <b class="text-danger">*</b></label>
                <span class="form-note">Specify the For 5 Years Old & Above Covid-19  Vaccine here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <select class="form-select" id="inp_f5yo" name="inp_f5yo" Required>
                <option value="" data-select2-id="3" style="text-transform: uppercase !important;">-- SELECT FOR 5 YEARS OLD & ABOVE COVID-19  VACCINE --</option>
                    <option value="Yes" data-select2-id="16">Yes</option>
                <option value="No" data-select2-id="16">No</option>
            </select>
                
        </div>
    </div>    
    <br>
<label>Personal/Social History</label>
    <br>
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_smoking">Smoking <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Smoking here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <select class="form-select" id="inp_smoking" name="inp_smoking"Required>
                <option value="" data-select2-id="3" style="text-transform: uppercase !important;">-- SELECT SMOKING --</option>
                    <option value="Yes" data-select2-id="16">Yes</option>
                <option value="No" data-select2-id="16">No</option>
            </select>
                
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_sa">Sexually Active <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Sexually Active here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <select class="form-select" id="inp_sa" name="inp_sa" Required>
                <option value="" data-select2-id="3" style="text-transform: uppercase !important;">-- SELECT SEXUALLY ACTIVE --</option>
                    <option value="Yes" data-select2-id="16">Yes</option>
                <option value="No" data-select2-id="16">No</option>
            </select>
                
        </div>
    </div>    
  
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_alcohol">Alcohol <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Alcohol here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <select class="form-select" id="inp_alcohol" name="inp_alcohol"Required>
                <option value="" data-select2-id="3" style="text-transform: uppercase !important;">-- SELECT ALCOHOL --</option>
                    <option value="Yes" data-select2-id="16">Yes</option>
                <option value="No" data-select2-id="16">No</option>
            </select>
                
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_id">Illicit Drugs <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Illicit Drugs here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <select class="form-select"  id="inp_id" name="inp_id" Required>
                <option value="" data-select2-id="3" style="text-transform: uppercase !important;" >-- SELECT ILLICIT DRUGS --</option>
                    <option value="Yes" data-select2-id="16">Yes</option>
                <option value="No" data-select2-id="16">No</option>
            </select>
                
        </div>
    </div>    
    <br>
<label>Menstural History</label>
     <br>
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_menarche">Menarche <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Menarche here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number"  class="form-control" id="inp_menarche" name="inp_menarche" placeholder="Enter (Required) Menarche here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_lmp">Last menstural period <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Last menstural period here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap focused">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-calendar-alt"></em>
                </div>
                <input type="text" data-date-format="yyyy-mm-dd" id="inp_lmp" name="inp_lmp" placeholder="YYYY-MM-DD" class="form-control date-picker" Required>
            </div>
                
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_osi">Onset Sexual Intercourse <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Onset Sexual Intercourse here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_osi" name="inp_osi" placeholder="Enter (Required) Onset Sexual Intercourse here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_menopause">Menopause <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Menopause here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <select class="form-select" id="inp_menopause" name="inp_menopause" Required>
                <option value="" data-select2-id="3" style="text-transform: uppercase !important;">-- SELECT MENOPAUSE --</option>
                    <option value="Yes" data-select2-id="16">Yes</option>
                <option value="No" data-select2-id="16">No</option>
            </select>
                
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_fpm">Family Planning Method <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Family Planning Method here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_fpm" name="inp_fpm" placeholder="Enter (Required) Family Planning Method here.. "Required>
            </div>
            
        </div>
    </div>    
    <br>
<label>Pregnancy History</label>
    <br>
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_gop">Gravity(No. of Pregnancy) <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Gravity(No. of Pregnancy) here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number" pattern="[0-9]" class="form-control" id="inp_gop" name="inp_gop" placeholder="Enter (Required) Gravity(No. of Pregnancy) here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_pod">Parity(No. Of Delivery) <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Parity(No. Of Delivery) here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number" pattern="[0-9]" class="form-control" id="inp_pod" name="inp_pod" placeholder="Enter (Required) Parity(No. Of Delivery) here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_tod">Type of Delivery <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Type of Delivery here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_tod" name="inp_tod" placeholder="Enter (Required) Type of Delivery here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_noft">No. of Full Term <b class="text-danger">*</b></label>
                <span class="form-note">Specify the No. of Full Term here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number" pattern="[0-9]" class="form-control" id="inp_noft" name="inp_noft" placeholder="Enter (Required) No. of Full Term here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_nop">No. of Premature <b class="text-danger">*</b></label>
                <span class="form-note">Specify the No. of Premature here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number" pattern="[0-9]" class="form-control" id="inp_nop" name="inp_nop" placeholder="Enter (Required) No. of Premature here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_noa">No. of Abortion <b class="text-danger">*</b></label>
                <span class="form-note">Specify the No. of Abortion here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number" pattern="[0-9]" class="form-control" id="inp_noa" name="inp_noa" placeholder="Enter (Required) No. of Abortion here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_nolc">No. of Living Children <b class="text-danger">*</b></label>
                <span class="form-note">Specify the No. of Living Children here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number" pattern="[0-9]" class="form-control" id="inp_nolc" name="inp_nolc" placeholder="Enter (Required) No. of Living Children here.. "Required>
            </div>
            
        </div>
    </div>    
                
    <div class="col-lg-5">
    </div>
    <div class="col-lg-7" style="float: right">
        <hr>
    </div>

    <div class="col-lg-5">
    </div>
    <div class="col-lg-7 justify-end" style="float: right">
        <hr>
        <div class="form-group mt-2 mb-2 justify-end">
            <button type="reset" class="btn btn-light bg-white mx-3">
                <em class="icon ni ni-repeat"></em>
                 Reset
            </button>
            <button  type="submit" class="btn btn-light bg-white">
                <em class="icon ni ni-save"></em>
                 Submit Record
            </button>
        </div>
    </div>
        
</form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
