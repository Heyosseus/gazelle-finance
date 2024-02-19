@extends('admin/layouts/admin')

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div id="kt_content_container" class="container-xxl">
        <div class="card">
            <div class="card-body p-0">
                <div class="card-px text-center py-20 my-10">
                    <h2 class="fs-2x fw-bolder mb-10">Welcome!</h2>
                    <p class="text-gray-400 fs-4 fw-bold mb-10">There are no customers added yet.
                    <br />Kickstart your CRM by adding a your first customer</p>
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_customer">Add Customer</a>
                </div>
                <div class="text-center px-4">
                    <img class="mw-100 mh-300px" alt="" src="assets/media/illustrations/sketchy-1/2.webp" />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
