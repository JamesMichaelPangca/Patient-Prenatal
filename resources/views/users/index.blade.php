<x-app-layout>
    <x-slot name="back"></x-slot>
    <x-slot name="header">{{ __('View Members & Account Role') }}</x-slot>
    <x-slot name="subHeader">{{ __('You can view the list of members here but you can`t create member.') }}</x-slot>
    <x-slot name="btn">
    </x-slot>

    <div class="nk-block">
        <div class="row g-gs">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-inner">
                        <table class="datatable-init table table-hover">
                            <thead>
                                <tr>
                                    <th width="50">#</th>
                                    <th>Member(s) List</th>
                                    <th width="250">Email Address</th>
                                    <th width="200">Position</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $num = 1;
                                @endphp
                                @foreach ($users as $data)
                                    <tr>
                                        <td>{{ $num++ }}.</td>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td>{{ $data->account_type }}</td>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="edit">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal">
                    <em class="icon ni ni-cross-sm"></em>
                </a>
                <div class="modal-body">
                    <h1 class="nk-block-title page-title text-2xl">
                        Edit Project
                    </h1>
                    <p>You can edit project to monitor the task.</p>
                    <hr class="mt-2 mb-2">

                    <form action="{{ route('projects.update') }}" method="POST">
                        @csrf
                        <div class="row mt-2 align-center">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-label" for="inp_pn">Project Name <b
                                            class="text-danger">*</b></label>
                                    <span class="form-note">Specify the Project Name here.</span>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-right">
                                            <em class="icon ni ni-info"></em>
                                        </div>
                                        <input type="hidden" name="inp_id" id="inp_id">
                                        <input type="text" required class="form-control" id="inp_pn_edit"
                                            id="inp_pn" name="inp_pn"
                                            placeholder="Enter (Required) Project Name here.. ">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2 align-center">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-label" for="inp_description">Description
                                        <i>(Optional)</i></label>
                                    <span class="form-note">Specify the Description here.</span>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <textarea class="form-control" id="inp_description" name="inp_description" id="default-textarea" rows="2"
                                        placeholder="Enter Description here.."></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">

                        </div>
                        <div class="col-lg-8" style="float: right">
                            <hr class="mt-2 mb-2">
                        </div>

                        <div class="col-lg-5">
                        </div>
                        <div class="col-lg-7 justify-end" style="float: right">
                            <div class="form-group mt-2 mb-2 justify-end">
                                <button type="submit" class="btn btn-success">
                                    <em class="icon ni ni-save"></em>
                                    &ensp;Save Changes
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script>
        function edit_project(id, name, description) {
            document.getElementById('inp_id').value = id;
            document.getElementById('inp_pn_edit').value = name;
            document.getElementById('inp_description').value = description;
        }

        function remove(id) {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '/api/remove/project',
                        type: 'POST',
                        data: {
                            id: id
                        },
                        success: function() {
                            Swal.fire({
                                title: "Deleted!",
                                text: "Your record has been deleted.",
                                icon: "success"
                            });
                            setTimeout(function() {
                                location.reload(); // Reload the page
                            }, 1000);
                        }
                    })

                }
            });
        }
    </script>


</x-app-layout>
