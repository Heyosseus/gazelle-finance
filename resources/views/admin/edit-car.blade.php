@extends('admin/layouts/admin')

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div id="kt_content_container" class="container-xxl">
            <div class="card">
                <div class="card-header border-0 pt-6">
                    <h1>Car edit</h1>

                    @if($errors->any())
                        {{ implode('', $errors->all('<div>:message</div>')) }}
                    @endif

                </div>
                <div class="card-body pt-0">
                    <div id="kt_docs_repeater_basic">
                        <div class="form-group mt-4">
                            <div data-repeater-list="kt_docs_repeater_basic">
                                <div data-repeater-item>
                                    <form action="{{ route('cars.edit', $car->id) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <label class="form-label">Name:</label>
                                                <input name="name" type="text" class="form-control mb-2 mb-md-0"
                                                    placeholder="Car name" value="{{ $car->name }}" />
                                            </div>
                                            <div class="col-md-3">
                                                <label class="form-label">Price:</label>
                                                <input name="price" type="number" class="form-control mb-2 mb-md-0"
                                                    placeholder="Car price" value="{{ $car->price }}" />
                                            </div>

                                            <div class="col-md-3">
                                                <label class="form-label">Category:</label>
                                                <select name="category[]" class="form-control mb-2 mb-md-0" multiple>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->name }}" @if ($category->id == $car->category_id) selected @endif>{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row mt-10">
                                            <label class="form-label">Images:</label>

                                            <label class="fs-6 fw-bold mb-2 mt-4">Upload main image</label>
                                            <input type="file" name="main_image" accept="image/*">
                                            @if ($car->main_image)
                                                <div class="mt-4 mb-2">
                                                    <img src="{{ asset($car->main_image) }}" alt="Main Image" style="max-width: 100px; max-height: 100px; border-radius: 3px">
{{--                                                    <button type="button" class="btn btn-danger btn-sm ms-2" onclick="removeImage('{{ $car->main_image }}', 'main_image')">Remove</button>--}}
{{--                                                    <button type="button" class="btn btn-primary btn-sm ms-2" onclick="editImage('{{ $car->main_image }}', 'main_image')">Edit</button>--}}
                                                </div>
                                            @endif

                                            <label class="fs-6 fw-bold mb-2 mt-4">Upload hover image</label>
                                            <input type="file" name="hover_image" accept="image/*">
                                            @if ($car->hover_image)
                                                <div class="mt-4 mb-2">
                                                    <img src="{{ asset($car->hover_image) }}" alt="Hover Image" style="max-width: 100px; max-height: 100px; border-radius: 3px">
{{--                                                    <button type="button" class="btn btn-danger btn-sm ms-2" onclick="removeImage('{{ $car->hover_image }}', 'hover_image')">Remove</button>--}}
{{--                                                    <button type="button" class="btn btn-primary btn-sm ms-2" onclick="editImage('{{ $car->hover_image }}', 'hover_image')">Edit</button>--}}
                                                </div>
                                            @endif

                                            <label class="fs-6 fw-bold mb-2 mt-4">Additional images</label>
                                            <input class="pictures" type="file" name="images[]" accept="image/*" multiple>

                                            <div class="mt-4 d-flex mr-5">
                                                @foreach($car->images as $image)
                                                    <div class="mb-2" style="margin-right: 2.5px;">
                                                        <img src="{{ asset($image) }}" alt="Image" style="max-width: 100px; max-height: 100px; border-radius: 3px">
{{--                                                        <button type="button" class="btn btn-danger btn-sm ms-2" onclick="removeImage('{{ $image }}')">Remove</button>--}}
{{--                                                        <button type="button" class="btn btn-primary btn-sm ms-2" onclick="editImage('{{ $image }}')">Edit</button>--}}
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>

                                        <div class="form-group row mt-10">
                                            <label class="form-label">Description:</label>
                                            <textarea name="description" class="form-control mb-2 mb-md-0" rows="10">{{ $car->description }}</textarea>
                                        </div>

                                        @php($selectedArray = [])
                                        @foreach($car_filter as $cf)
                                            @php($selectedArray[] = $cf->filter_id)
                                        @endforeach
{{--                                        @php(dd($selectedArray))--}}
                                        <div class="form-group row mt-10">
                                            @foreach ($filters as $name => $values)
                                                <div class="fv-row mb-7">
                                                    <label class="required fs-6 fw-bold mb-2" for="{{ $name }}">{{ $name }}</label>

                                                    <select class="form-control" class="form-control form-control-solid" id="{{ $name }}" name="filters[{{ $name }}][]" multiple>
                                                        @foreach ($values as $value)
                                                            @if(in_array($value->id,$selectedArray))
                                                                @php($selected = 'selected')
                                                            @else
                                                                @php($selected = '')
                                                            @endif
                                                                <option {{$selected}} value="{{ $value->value }}">{{ $value->value }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="form-group mt-5">
                                            <button type="submit" data-repeater-create class="btn btn-light-primary w-100">
                                                Update  
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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

