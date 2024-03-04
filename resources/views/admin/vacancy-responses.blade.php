
@extends('admin/layouts/admin')

@section('content')

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div id="kt_content_container" class="container-fluid">
            <div class="card">
                <div class="card-header border-0 pt-6">
                    <h2>Vacancy responses</h2>
                </div>
                <div class="card-body pt-0">
                    <div class="table-responsive">
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
                            <thead>
                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                <th class="min-w-125px">Name</th>
                                <th class="min-w-125px">Email</th>
                                <th class="min-w-125px">Position</th>
                                <th class="min-w-125px">CV</th>
                                <th class="min-w-125px">Send at</th>
                                <th class="min-w-125px">Action</th>
                            </tr>
                            </thead>
                            <tbody class="fw-bold text-gray-600">
                            @foreach ($responses as $response)
                                <tr>
                                    <td>{{ $response->name }}</td>
                                    <td>{{ $response->email }}</td>
                                    <td>{{ $response->position }}</td>
                                    <td>
                                        <a href="#" class="pdf-link" data-toggle="modal" data-target="#pdfModal" data-pdf="{{ $response->CV }}">View CV</a>
                                    </td>
                                    <td>{{ $response->created_at }}</td>
                                    <td><a href="{{ route('admin.vacancy-responses.delete', $response->id) }}" class="text-danger">Delete</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="pdfModal" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="pdfModalLabel">PDF Document</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <embed id="pdfEmbed" src="" type="application/pdf" width="100%" height="600px" />
                        </div>
                    </div>
                </div>
            </div>
            @if (count($responses) > 0)
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
            @endif

        </div>
    </div>

@endsection
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var pdfLinks = document.querySelectorAll('.pdf-link');
        pdfLinks.forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                var pdfUrl = this.getAttribute('data-pdf');
                var pdfEmbed = document.getElementById('pdfEmbed');
                pdfEmbed.setAttribute('src', pdfUrl);
                var modal = new bootstrap.Modal(document.getElementById('pdfModal'));
                modal.show();
            });
        });
    });
</script>
