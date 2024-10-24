<x-app-layout>
    <x-slot name="back"></x-slot>
    <x-slot name="header">{{ __('Prenatal Visit Record') }}</x-slot>
    <x-slot name="subHeader">{{ __('You can manage your prenatal visit record and register new prenatal visit record here.') }}</x-slot>
    <x-slot name="btn">
        <div class="toggle-wrap nk-block-tools-toggle">
            <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em
                    class="icon ni ni-more-v"></em></a>
            <div class="toggle-expand-content" data-content="pageMenu">
                <ul class="nk-block-tools g-3">
                    <li class="nk-block-tools-opt">
                        <button class="btn btn-primary btn-round" data-bs-toggle="modal" data-bs-target="#registration">
                            <em class="icon ni ni-plus-circle"></em>&ensp;
                            Register New Prenatal Visit Record
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
                          <th>Name</th>
                          <th>Age</th>
                           <th>Birthday</th>
                          <th>Family Serial No</th>
                          <th>Maiden Name</th>
                          <th>Husband </th>
                          <th>Civil Status</th>
                           <th>Address</th>
                          <th>Cellphone No</th>
                          <th>Length of Stay</th>
                          <th>Landlord/Houseowner</th>
                          <th>Father's Name</th>
                           <th>Father's Address</th>
                          <th>Mother's Name</th>
                          <th>Mother's Address</th>
                          <th>Philhealth No</th>
                          <th>Philhealth Membership </th>
                           <th>4Ps or NHTS #</th>
                          <th>Non 4Ps or NHTS</th>
                          <th>Religion</th>
                          <th>Employment Status</th>
                          <th>Date</th>
                           <th>HT</th>
                          <th>Temp</th>
                          <th>PR</th>
                          <th>RR</th>
                          <th>BP</th>
                           <th>Menarche</th>
                          <th>LMP</th>
                          <th>Gravida</th>
                          <th>PARA</th>
                          <th>Full Term</th>
                           <th>Abortion</th>
                          <th>Still Birth</th>
                          <th>Lab Results</th>
                          <th>Hgb</th>
                          <th>U/A</th>
                           <th>VDRL/RPR</th>
                          <th>HX of The FF</th>
                          <th>EDC</th>
                          <th>AOG</th>
                          <th>Date of Last Delivery</th>
                           <th>Place of Last Delivery</th>
                          <th>T1</th>
                          <th>T2</th>
                          <th>T3</th>
                          <th>T4</th>
                          <th>T5</th>
                          <th>FIM</th>
                          <th>STI Risk</th>
                          <th>HIX of The FF</th>
                          <th>OB Historical Including Abortion</th>
                          <th>Gravida </th>
                          <th>Date </th>
                          <th>OutCome </th>
                          <th>Gender Presentation </th>
                          <th>Place of Delivery </th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($prenatal as $data )
                                <tr style="cursor: pointer">    
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->pvr_name }}</td>
                                    <td>{{ $data->pvr_age }}</td>
                                    <td>{{ $data->pvr_birthday }}</td>
                                    <td>{{ $data->pvr_family_serial_no }}</td>
                                    <td>{{ $data->pvr_maiden_name }}</td>
                                    <td>{{ $data->pvr_husband }}</td>
                                    <td>{{ $data->pvr_civil_status }}</td>
                                    <td>{{ $data->pvr_address }}</td>
                                    <td>{{ $data->pvr_cellphone_no}}</td>
                                    <td>{{ $data->pvr_length_of_stay}}</td>
                                    <td>{{ $data->pvr_landlord }}</td>
                                    <td>{{ $data->pvr_father_name }}</td>
                                    <td>{{ $data->pvr_father_address }}</td>
                                    <td>{{ $data->pvr_mother_name }}</td>
                                    <td>{{ $data->pvr_mother_address }}</td>
                                    <td>{{ $data->pvr_philhealth_no }}</td>
                                    <td>{{ $data->pvr_philhealth_membership }}</td>
                                    <td>{{ $data->pvr_4ps_or_nhts }}</td>
                                    <td>{{ $data->pvr_non_4ps_or_nhts }}</td>
                                    <td>{{ $data->pvr_religion }}</td>
                                    <td>{{ $data->pvr_employment_status}}</td>
                                    <td>{{ $data->pvr_date}}</td>
                                    <td>{{ $data->pvr_ht }}</td>
                                    <td>{{ $data->pvr_temp }}</td>
                                    <td>{{ $data->pvr_pr }}</td>
                                    <td>{{ $data->pvr_rr }}</td>
                                    <td>{{ $data->pvr_bp }}</td>
                                    <td>{{ $data->pvr_menarche }}</td>
                                    <td>{{ $data->pvr_lmp }}</td>
                                    <td>{{ $data->pvr_gravida }}</td>
                                    <td>{{ $data->pvr_para}}</td>
                                    <td>{{ $data->pvr_full_term}}</td>
                                    <td>{{ $data->pvr_abortion }}</td>
                                    <td>{{ $data->pvr_still_birth }}</td>
                                    <td>{{ $data->pvr_lab_results }}</td>
                                    <td>{{ $data->pvr_hgb }}</td>
                                    <td>{{ $data->pvr_u }}</td>
                                    <td>{{ $data->pvr_vdrl }}</td>
                                    <td>{{ $data->pvr_hx_of__the_ff }}</td>
                                    <td>{{ $data->pvr_edc }}</td>
                                    <td>{{ $data->pvr_aog}}</td>
                                    <td>{{ $data->pvr_date_of_last_delivery}}</td>
                                    <td>{{ $data->pvr_place_of_last_delivery }}</td>
                                    <td>{{ $data->pvr_t1 }}</td>
                                    <td>{{ $data->pvr_t2 }}</td>
                                    <td>{{ $data->pvr_t3 }}</td>
                                    <td>{{ $data->pvr_t4 }}</td>
                                    <td>{{ $data->pvr_t5 }}</td>
                                    <td>{{ $data->pvr_fim }}</td>
                                    <td>{{ $data->pvr_sti_risk }}</td>
                                    <td>{{ $data->pvr_hix_of_the_ff}}</td>
                                    <td>{{ $data->pvr_ob_historical_including_abortion}}</td>
                                    <td>{{ $data->pvr_gravidad }}</td>
                                    <td>{{ $data->pvr_dated }}</td>
                                    <td>{{ $data->pvr_outcome }}</td>
                                    <td>{{ $data->pvr_gender_presentation }}</td>
                                    <td>{{ $data->pvr_place_of_delivery }}</td>
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
                        Personal Information
                    </h1>
                    <p>You can create new customer to monitor.</p>
                    <hr class="mt-2 mb-2">
 <form  action="{{ route('prenatal.save') }}" method="POST">
    @csrf
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_name">Name <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Name here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_name" name="inp_name" placeholder="Enter (Required) Name here.. " Required>
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
                <label class="form-label" for="inp_birthday">Birthday <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Birthday here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap focused">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-calendar-alt"></em>
                </div>
                <input type="text" data-date-format="yyyy-mm-dd" id="inp_birthday" name="inp_birthday" placeholder="YYYY-MM-DD" class="form-control date-picker"Required>
            </div>
                
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_fsn">Family Serial No <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Family Serial No here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number" pattern="[0-9]" class="form-control" id="inp_fsn" name="inp_fsn" placeholder="Enter (Required) Family Serial No here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_mn">Maiden Name <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Maiden Name here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_mn" name="inp_mn" placeholder="Enter (Required) Maiden Name here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_husband">Husband <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Husband here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_husband" name="inp_husband" placeholder="Enter (Required) Husband here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_cs">Civil Status <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Civil Status here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_cs" name="inp_cs" placeholder="Enter (Required) Civil Status here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_address">Address <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Address here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_address" name="inp_address" placeholder="Enter (Required) Address here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_cn">Cellphone No <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Cellphone No here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number" pattern="[0-9]" class="form-control" id="inp_cn" name="inp_cn" placeholder="Enter (Required) Cellphone No here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_los">Length of Stay <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Length of Stay here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_los" name="inp_los" placeholder="Enter (Required) Length of Stay here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_landlord">Landlord/Houseowner <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Landlord/Houseowner here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_landlord" name="inp_landlord" placeholder="Enter (Required) Landlord/Houseowner here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_fn">Father's Name <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Father's Name here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_fn" name="inp_fn" placeholder="Enter (Required) Father's Name here.. "Required
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_fa">Father's Address <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Father's Address here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_fa" name="inp_fa" placeholder="Enter (Required) Father's Address here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_mns">Mother's Name <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Mother's Name here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_mns" name="inp_mns" placeholder="Enter (Required) Mother's Name here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_ma">Mother's Address <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Mother's Address here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_ma" name="inp_ma" placeholder="Enter (Required) Mother's Address here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_pn">Philhealth No <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Philhealth No here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number" pattern="[0-9]" class="form-control" id="inp_pn" name="inp_pn" placeholder="Enter (Required) Philhealth No here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_pm">Philhealth Membership <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Philhealth Membership here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <select class="form-select" id="inp_pm" name="inp_pm" Required>
                <option value="" data-select2-id="3" style="text-transform: uppercase !important;">-- SELECT PHILHEALTH MEMBERSHIP --</option>
                    <option value="Private" data-select2-id="16">Private</option>
                <option value="NHTS" data-select2-id="16">NHTS</option>
                <option value="LGU" data-select2-id="16">LGU</option>
                <option value="Non-Philhealth" data-select2-id="16">Non-Philhealth</option>
            </select>
                
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_4on">4Ps or NHTS # <b class="text-danger">*</b></label>
                <span class="form-note">Specify the 4Ps or NHTS # here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number" pattern="[0-9]" class="form-control" id="inp_4on" name="inp_4on" placeholder="Enter (Required) 4Ps or NHTS # here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_n4on">Non 4Ps or NHTS <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Non 4Ps or NHTS here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number"  class="form-control" id="inp_n4on" name="inp_n4on" placeholder="Enter (Required) Non 4Ps or NHTS here.. "Required>
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
                <label class="form-label" for="inp_es">Employment Status <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Employment Status here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_es" name="inp_es" placeholder="Enter (Required) Employment Status here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_date">Date <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Date here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap focused">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-calendar-alt"></em>
                </div>
                <input type="text" data-date-format="yyyy-mm-dd" id="inp_date" name="inp_date" placeholder="YYYY-MM-DD" class="form-control date-picker"Required>
            </div>
                
        </div>
    </div>    

    <br>
    <label>Subjective/Objective</label>
    <br>
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_ht">HT <b class="text-danger">*</b></label>
                <span class="form-note">Specify the HT here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number" pattern="[0-9]" class="form-control" id="inp_ht" name="inp_ht" placeholder="Enter (Required) HT here.. "Required>
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
                <label class="form-label" for="inp_pr">PR <b class="text-danger">*</b></label>
                <span class="form-note">Specify the PR here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number" pattern="[0-9]" class="form-control" id="inp_pr" name="inp_pr" placeholder="Enter (Required) PR here.. "Required>
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
                <label class="form-label" for="inp_bp">BP <b class="text-danger">*</b></label>
                <span class="form-note">Specify the BP here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number" pattern="[0-9]" class="form-control" id="inp_bp" name="inp_bp" placeholder="Enter (Required) BP here.. "Required>
            </div>
            
        </div>
    </div>    
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
                <input type="number" pattern="[0-9]" class="form-control" id="inp_menarche" name="inp_menarche" placeholder="Enter (Required) Menarche here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_lmp">LMP <b class="text-danger">*</b></label>
                <span class="form-note">Specify the LMP here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text" data-date-format="yyyy-mm-dd" id="inp_lmp" name="inp_lmp" placeholder="YYYY-MM-DD" class="form-control date-picker"Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_gravida">Gravida <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Gravida here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number" pattern="[0-9]" class="form-control" id="inp_gravida" name="inp_gravida" placeholder="Enter (Required) Gravida here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_para">PARA <b class="text-danger">*</b></label>
                <span class="form-note">Specify the PARA here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number" pattern="[0-9]" class="form-control" id="inp_para" name="inp_para" placeholder="Enter (Required) PARA here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_ft">Full term <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Full term here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_ft" name="inp_ft" placeholder="Enter (Required) Full term here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_abortion">Abortion <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Abortion here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number" pattern="[0-9]" class="form-control" id="inp_abortion" name="inp_abortion" placeholder="Enter (Required) Abortion here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_sb">Still Birth <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Still Birth here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number" pattern="[0-9]" class="form-control" id="inp_sb" name="inp_sb" placeholder="Enter (Required) Still Birth here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_lr">Lab Results <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Lab Results here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_lr" name="inp_lr" placeholder="Enter (Required) Lab Results here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_hgb">Hgb <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Hgb here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number" pattern="[0-9]" class="form-control" id="inp_hgb" name="inp_hgb" placeholder="Enter (Required) Hgb here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_ua">U/A <b class="text-danger">*</b></label>
                <span class="form-note">Specify the U/A here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_ua" name="inp_ua" placeholder="Enter (Required) U/A here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_vdrl">VDRL/RPR <b class="text-danger">*</b></label>
                <span class="form-note">Specify the VDRL/RPR here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_vdrl" name="inp_vdrl" placeholder="Enter (Required) VDRL/RPR here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_hxff">HX of  The FF <b class="text-danger">*</b></label>
                <span class="form-note">Specify the HX of  The FF here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            <select class="form-select" id="inp_hxff" name="inp_hxff"Required>
                <option value="" data-select2-id="3" style="text-transform: uppercase !important;">-- SELECT HX OF  THE FF --</option>
                    <option value="Smoking" data-select2-id="16">Smoking</option>
                <option value="Allergy" data-select2-id="16">Allergy</option>
                <option value="Alcohol Intake" data-select2-id="16">Alcohol Intake</option>
                <option value="Previous CS" data-select2-id="16">Previous CS</option>
                <option value="3 Consecutive Miscarriage" data-select2-id="16">3 Consecutive Miscarriage</option>
                <option value="Ectopic Pregnancy/H-Mole w/in 12 Months" data-select2-id="16">Ectopic Pregnancy/H-Mole w/in 12 Months</option>
                <option value="PP Bleeding" data-select2-id="16">PP Bleeding</option>
                <option value="Forceps Delivery" data-select2-id="16">Forceps Delivery</option>
                <option value="WT of Baby >4kgs" data-select2-id="16">WT of Baby >4kgs</option>
                <option value="Asthma" data-select2-id="16">Asthma</option>
                <option value="Goiter" data-select2-id="16">Goiter</option>
                <option value="Premature Contraction" data-select2-id="16">Premature Contraction</option>
                <option value="DM" data-select2-id="16">DM</option>
                <option value="Heart Disease" data-select2-id="16">Heart Disease</option>
                <option value="Obesity" data-select2-id="16">Obesity</option>
            </select>
                
        </div>
    </div>    
    <br>
    <label>Assessment/Diagnosis</label>
    <br>
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_edc">EDC <b class="text-danger">*</b></label>
                <span class="form-note">Specify the EDC here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap focused">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-calendar-alt"></em>
                </div>
                <input type="text" data-date-format="yyyy-mm-dd" id="inp_edc" name="inp_edc" placeholder="YYYY-MM-DD" class="form-control date-picker"Required>
            </div>
                
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_aog">AOG <b class="text-danger">*</b></label>
                <span class="form-note">Specify the AOG here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number" pattern="[0-9]" class="form-control" id="inp_aog" name="inp_aog" placeholder="Enter (Required) AOG here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_dold">Date of Last Delivery <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Date of Last Delivery here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap focused">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-calendar-alt"></em>
                </div>
                <input type="text" data-date-format="yyyy-mm-dd" id="inp_dold" name="inp_dold" placeholder="YYYY-MM-DD" class="form-control date-picker"Required>
            </div>
                
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_pold">Place of Last Delivery <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Place of Last Delivery here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_pold" name="inp_pold" placeholder="Enter (Required) Place of Last Delivery here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_t1">T1 <b class="text-danger">*</b></label>
                <span class="form-note">Specify the T1 here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_t1" name="inp_t1" placeholder="Enter (Required) T1 here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_t2">T2 <b class="text-danger">*</b></label>
                <span class="form-note">Specify the T2 here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_t2" name="inp_t2" placeholder="Enter (Optional) T2 here.. ">
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_t3">T3 <b class="text-danger">*</b></label>
                <span class="form-note">Specify the T3 here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_t3" name="inp_t3" placeholder="Enter (Optional) T3 here.. ">
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_t4">T4 <b class="text-danger">*</b></label>
                <span class="form-note">Specify the T4 here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_t4" name="inp_t4" placeholder="Enter (Optional) T4 here.. ">
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_t5">T5 <b class="text-danger">*</b></label>
                <span class="form-note">Specify the T5 here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_t5" name="inp_t5" placeholder="Enter (Optional) T5 here.. ">
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_fim">FIM <b class="text-danger">*</b></label>
                <span class="form-note">Specify the FIM here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number"  class="form-control" id="inp_fim" name="inp_fim" placeholder="Enter (Required) FIM here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_sr">STI Risk <b class="text-danger">*</b></label>
                <span class="form-note">Specify the STI Risk here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <select class="form-select" id="inp_sr" name="inp_sr" required>
                <option value="" data-select2-id="3" style="text-transform: uppercase !important;">-- SELECT STI RISK --</option>
                    <option value="Multiple Sex Partners" data-select2-id="16">Multiple Sex Partners</option>
                <option value="Unusual Discharge From Vagina" data-select2-id="16">Unusual Discharge From Vagina</option>
                <option value="Itching/ Sores In Or Around The Vagina" data-select2-id="16">Itching/ Sores In Or Around The Vagina</option>
                <option value="Pain/Burning Sensation" data-select2-id="16">Pain/Burning Sensation</option>
                <option value="TX for STIs In The Past" data-select2-id="16">TX for STIs In The Past</option>
            </select>
                
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_hotf">HIX of The FF <b class="text-danger">*</b></label>
                <span class="form-note">Specify the HIX of The FF here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <select class="form-select" id="inp_hotf" name="inp_hotf"Required>
                <option value="" data-select2-id="3" style="text-transform: uppercase !important;">-- SELECT HIX OF THE FF --</option>
                    <option value="Ovarian Cyst" data-select2-id="16">Ovarian Cyst</option>
                <option value="Myoma uteri" data-select2-id="16">Myoma uteri</option>
                <option value="Placenta Previa" data-select2-id="16">Placenta Previa</option>
                <option value="Still Birth" data-select2-id="16">Still Birth</option>
                <option value="Pre-Eclampsia" data-select2-id="16">Pre-Eclampsia</option>
                <option value="Eclampsia" data-select2-id="16">Eclampsia</option>
                <option value="Contraction" data-select2-id="16">Contraction</option>
                <option value="HPN" data-select2-id="16">HPN</option>
                <option value="Uterine Myomectomy" data-select2-id="16">Uterine Myomectomy</option>
                <option value="Thyroid D/O" data-select2-id="16">Thyroid D/O</option>
                <option value="Epilepsy" data-select2-id="16">Epilepsy</option>
                <option value="HT<145cm" data-select2-id="16">HT<145cm</option>
                <option value="FH>36cm" data-select2-id="16">FH>36cm</option>
            </select>
                
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_oxa">OB Historical Including Abortion <b class="text-danger">*</b></label>
                <span class="form-note">Specify the OB Historical Including Abortion here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_ohia" name="inp_ohia" placeholder="Enter (Required) OB Historical Including Abortion here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_gravidas">Gravida <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Gravida here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number" pattern="[0-9]" class="form-control" id="inp_gravidas" name="inp_gravidas" placeholder="Enter (Required) Gravida here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_dates">Date <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Date here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap focused">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-calendar-alt"></em>
                </div>
                <input type="text" data-date-format="yyyy-mm-dd" id="inp_dates" name="inp_dates" placeholder="YYYY-MM-DD" class="form-control date-picker"Required>
            </div>
                
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_outcome">OutCome <b class="text-danger">*</b></label>
                <span class="form-note">Specify the OutCome here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_outcome" name="inp_outcome" placeholder="Enter (Required) OutCome here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_gp">Gender Presentation <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Gender Presentation here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_gp" name="inp_gp" placeholder="Enter (Required) Gender Presentation here.. "Required>
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_pods">Place of Delivery <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Place of Delivery here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_pods" name="inp_pods" placeholder="Enter (Required) Place of Delivery here.. "Required>
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
