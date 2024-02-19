@extends('admin/layouts/admin')

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div id="kt_content_container" class="container-xxl">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card">
                <div class="card-body p-lg-20">
                    <div class="mb-17">
                        <div class="d-flex flex-stack mb-5">
                            <h3 class="text-black">Cars</h3>
                            <a href="javascript:void[0];" class="fs-6 fw-bold link-primary" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_1">
                                <i class="bi bi-plus"></i>
                                Add new car
                            </a>
                        </div>
                        <div class="separator separator-dashed mb-9"></div>
                        <div class="row g-10">
                        @foreach ($cars as $car)
                            <div class="col-md-4">
                                <div class="card-xl-stretch me-md-6">
                                    <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="{{ route('cars.detail', $car->id) }}" target="_blank">
                                        @php
                                            $images = $car->image;
                                            $image = '';

                                            if (!is_null($images) && count($images) > 0)
                                            {
                                                $image = $images[0];
                                            }
                                            else
                                            {
                                                $image = $car->main_image;
                                            }
                                        @endphp
                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                            style="background-image:url('{{ $image }}')">
                                        </div>

                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                            <i class="bi bi-eye-fill fs-2x text-white"></i>
                                        </div>
                                    </a>

                                    <div class="mt-5">
                                        <a href="#"class="fs-4 text-dark fw-bolder text-hover-primary text-dark lh-base">{{ $car->name }}</a>

                                        @if ($car->description)
                                            <div class="fw-bold fs-5 text-gray-600 text-dark mt-3">{{ Illuminate\Support\Str::limit($car->description, 70, $end = '...') }}</div>
                                        @endif

                                        <div class="fs-6 fw-bolder mt-5 d-flex justify-content-between flex-wrap">
                                            <span class="badge fs-2 fw-bolder text-gray-600 p-2 mt-2">
                                                <span class="fs-6 fw-bold text-gray-500">$</span>{{ $car->price }}</span>

                                            <div class="action-btns">
                                                <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-primary p-3 px-4">Edit</a>
                                                <a href="{{ route('cars.delete', $car->id) }}" class="btn btn-danger p-3 px-4">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" tabindex="-1" id="kt_modal_1">
                <form action="{{ route('cars.add') }}" enctype="multipart/form-data" method="post">
                    @csrf

                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">New car</h5>
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
                                            placeholder="Enter car name" name="name" required />
                                    </div>

                                    <div class="fv-row mb-7">
                                        <label class="required fs-6 fw-bold mb-2">Price</label>
                                        <input type="number" class="form-control form-control-solid"
                                            placeholder="Car price" name="price" required />
                                    </div>

                                    <div class="fv-row mb-7">
                                        <label class="required fs-6 fw-bold mb-2">Select category</label>
                                        <select name="category[]" id="category" class="form-control form-control-solid" multiple>

                                            @foreach ($categories as $cat)
                                                <option name="{{ $cat->name }}">{{ $cat->name }}</option>
                                            @endforeach

                                        </select>
                                    </div>

                                    <div class="fv-row mb-7">
                                        <label class="fs-6 fw-bold mb-2">Description</label>
                                        <textarea class="form-control form-control-solid" placeholder="Description text..." name="description"
                                            rows="8"></textarea>
                                    </div>

                                    <label class="required fs-6 fw-bold mb-2 mt-4">Upload main image</label>
                                    <input type="file" name="main_image" accept="image/*" required>

                                    <label class="required fs-6 fw-bold mb-2 mt-4">Upload hover image</label>
                                    <input type="file" name="hover_image" accept="image/*" required>

                                    <div class="fv-row mb-10 images">
                                        <label class="required fs-6 fw-bold mb-2">Addational images</label>
                                        <input class="pictures" type="file" name="images[]" accept="image/*" multiple>
                                    </div>
                                    <button type="button" onclick="addImageField()">Add more images</button>

                                    <h2 class="mt-4 mb-10">Filters</h2>

                                    @foreach ($filters as $name => $values)
                                        <div class="fv-row mb-7">
                                            <label class="required fs-6 fw-bold mb-2" for="{{ $name }}">{{ $name }}</label>

                                            <select class="form-control" class="form-control form-control-solid" id="{{ $name }}" name="filters[{{ $name }}][]" multiple>
                                                @foreach ($values as $value)
                                                    <option value="{{ $value->value }}">{{ $value->value }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    @endforeach

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

    <script>
        function addImageField() {
            const fileInput = document.createElement("input");
            fileInput.type = "file";
            fileInput.name = "images[]";
            fileInput.accept = "image/*";

            const container = document.querySelector(".images ");
            container.appendChild(fileInput);
        }
    </script>

@endsection
