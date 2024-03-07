@extends('admin/layouts/admin')

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div id="kt_content_container" class="container-xxl">
            <div class="card">
                <div class="card-header border-0 pt-6">
                    <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal"
                            data-bs-target="#kt_modal_add_customer">Add new employee
                    </button>
                </div>
                <div class="card-body pt-0">
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
                        <thead>
                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                            <th class="min-w-125px">Name</th>
                            <th class="min-w-125px">Position</th>
                            <th class="min-w-125px">About</th>
                            <th class="min-w-125px">Image</th>
                            <th class="text-end min-w-70px">Actions</th>
                        </tr>
                        </thead>
                        <tbody class="fw-bold text-gray-600">
                        @foreach ($employees as $employee)
                            <tr>
                                <td>{{ $employee->employee_name }}</td>
                                <td>{{ $employee->position }}</td>
                                <td>{{ $employee->about }}</td>
                                <td><img style="max-width: 120px ; max-height: 120px;" src="{{ $employee->image }}"
                                         alt=""></td>

                                <td class="text-end">

                                    <a href="{{ route('admin.team.delete', $employee->id) }}" class="menu-link px-3 text-danger"
                                       data-kt-customer-table-filter="delete_row">Delete</a>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="modal fade" id="kt_modal_add_customer" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <div class="modal-content">
                        <form class="form" action="{{ route('admin.team.store') }}" method="post" enctype="multipart/form-data"
                              id="kt_modal_add_customer_form">
                            @csrf

                            <div class="modal-header" id="kt_modal_add_customer_header">
                                <h2 class="fw-bolder">Add new employee</h2>
                                <div id="kt_modal_add_customer_close" data-bs-dismiss="modal"
                                     class="btn btn-icon btn-sm btn-active-icon-primary">
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                              transform="rotate(-45 6 17.3137)" fill="black"/>
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                              transform="rotate(45 7.41422 6)" fill="black"/>
                                    </svg>
                                </span>
                                </div>
                            </div>

                            <div class="modal-body py-10 px-lg-17">
                                <div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll" data-kt-scroll="true"
                                     data-kt-scroll-activate="{default: false, lg: true}"
                                     data-kt-scroll-max-height="auto"
                                     data-kt-scroll-dependencies="#kt_modal_add_customer_header"
                                     data-kt-scroll-wrappers="#kt_modal_add_customer_scroll"
                                     data-kt-scroll-offset="300px">

                                    <div class="fv-row mb-7">
                                        <label class="required fs-6 fw-bold mb-2">Name</label>
                                        <input type="text" class="form-control form-control-solid"
                                               placeholder="Enter employee name" name="employee_name" required/>
                                    </div>

                                    <div class="fv-row mb-7">
                                        <label class="required fs-6 fw-bold mb-2">Position</label>
                                        <input type="text" class="form-control form-control-solid"
                                               placeholder="Enter position" name="position" required/>
                                    </div>
                                    <div class="fv-row mb-7">
                                        <label class="required fs-6 fw-bold mb-2">About</label>
                                        <input type="text" class="form-control form-control-solid" placeholder="about"
                                               name="about" required/>
                                    </div>
                                    <div class="fv-row mb-10 images">
                                        <label class="required fs-6 fw-bold mb-2">Images</label>
                                        <div>
                                            <input class="pictures required" type="file" name="image" accept="image"
                                                   required>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="modal-footer flex-center">
                                <button type="reset" id="kt_modal_add_customer_cancel" data-bs-dismiss="modal"
                                        class="btn btn-light me-3">Discard
                                </button>
                                <button type="submit" id="kt_modal_add_customer_submit" class="btn btn-primary">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
