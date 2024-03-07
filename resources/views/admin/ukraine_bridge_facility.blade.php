
@extends('admin/layouts/admin')

@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div id="kt_content_container" class="container-fluid">
        <div class="card">
            <div class="card-header border-0 pt-6">
                <h2>Ukraine Bridge Facility</h2>
            </div>
            <div class="card-header border-0 pt-6">
                <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#kt_modal_add_customer">Add new Ukraine Bridge Facility</button>
            </div>
            <div class="card-body pt-0">
                <div class="table-responsive">
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
                        <thead>
                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                <th class="min-w-125px">Title</th>
                                <th class="min-w-125px">Description</th>
{{--                                <th class="min-w-125px">Author</th>--}}
                                <th class="min-w-125px">Photo</th>
                                <th class="min-w-125px">Created at</th>
                                <th class="min-w-125px">Action</th>
                            </tr>
                        </thead>
                        <tbody class="fw-bold text-gray-600">
                            @foreach ($UkraineBridgeFacility as $oneUkraineBridgeFacility)
                            <tr>
                                <td>{{ $oneUkraineBridgeFacility->title }}</td>
                                @php
                                    $shortDescription = strlen($oneUkraineBridgeFacility->description) > 200 ? substr($oneUkraineBridgeFacility->description, 0, 400) . '...' : $oneUkraineBridgeFacility->description;
                                @endphp
                                <td>{!! $shortDescription !!}</td>
{{--                                <td>{{ App\Models\User::whereId($oneUkraineBridgeFacility->author)->select('name')->first()->name }}</td>--}}
                                <td><img style="max-width: 120px ; max-height: 120px;" src="{{$oneUkraineBridgeFacility->image}}" alt=""></td>
                                <td>{{ $oneUkraineBridgeFacility->created_at }}</td>
                                <td><a href="{{ route('admin.ukraine_bridge_facility.delete', $oneUkraineBridgeFacility->id) }}" class="text-danger">Delete</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

            <div class="modal fade" id="kt_modal_facs" tabindex="-1" aria-hidden="true" >
                <div class="modal-dialog modal-dialog-centered" >
                    <div class="modal-content" >

                            <div class="modal-header" id="kt_modal_facs_header">
                                <h2 class="fw-bolder">Facilities</h2>
                                <div id="kt_modal_facs_close" data-bs-dismiss="modal" class="btn btn-icon btn-sm btn-active-icon-primary">
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                        </svg>
                                    </span>
                                </div>
                            </div>

                            <div class="modal-body py-10 px-lg-17">
                                <div class="scroll-y me-n7 pe-7" id="kt_modal_facs_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_facs_header" data-kt-scroll-wrappers="#kt_modal_facs_scroll" data-kt-scroll-offset="300px">
                                    <p id="message-text"></p>
                                </div>
                            </div>

                    </div>
                </div>
            </div>

        <div class="modal fade" id="kt_modal_add_customer" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered mw-650px">
                <form action="{{ route('admin.ukraine_bridge_facility.store') }}" enctype="multipart/form-data" method="post" novalidate>
                    @csrf

                    <div class="modal-dialog">
                        <div class="modal-content w-650px">
                            <div class="modal-header">
                                <h5 class="modal-title">New Ukraine Bridge Facility</h5>
                                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                                     aria-label="Close">
                                    <span class="svg-icon svg-icon-2x"></span>
                                </div>
                            </div>

                            <div class="modal-body py-10 px-lg-17">
                                <div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll" data-kt-scroll="true"
                                     data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                                     data-kt-scroll-dependencies="#kt_modal_add_customer_header"
                                     data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll-offset="300px">

                                    <div class="fv-row mb-7">
                                        <label class="required fs-6 fw-bold mb-2">Name</label>
                                        <input type="text" class="form-control form-control-solid"
                                               placeholder="Enter UkraineBridgeFacility title" name="name" required />
                                    </div>


                                    <div class="fv-row mb-7 ">
                                        <label class="fs-6 fw-bold mb-2 required">Description</label>
                                        <textarea class="form-control form-control-solid required" placeholder="Description text..." name="description" rows="8"  id="uk-textarea"  required></textarea>
                                    </div>

                                    <div class="fv-row mb-10 images">
                                        <label class="required fs-6 fw-bold mb-2">Images</label>
                                        <div>
                                            <input class="pictures required" type="file" name="image" accept="image" required>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
    <script>
        ClassicEditor
            .create( document.querySelector( '#uk-textarea' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

@endsection
