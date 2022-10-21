@extends('layouts.admin')

@push('style')
    <link rel="stylesheet" href="{{ asset('backend/vendor/select2/css/select2.min.css') }}">
@endpush

@section('content')
    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex">
                <h6 class="m-0 font-weight-bold text-primary">
                    {{ __('Edit product')}}
                </h6>
                <div class="ml-auto">
                    <a href="#" class="btn btn-primary">
                        <span class="icon text-white-50">
                            <i class="fa fa-home"></i>
                        </span>
                        <span class="text">{{ __('Back to products') }}</span>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <form action="#" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    {{-- <input class="form-control" id="name" type="text" name="name" value="{{ old('name', $product->name) }}"> --}}
                                    <input class="form-control" id="name" type="text" name="name" value="">
                                    @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    {{-- <input class="form-control" id="price" type="number" name="price" value="{{ old('price', $product->price) }}"> --}}
                                    <input class="form-control" id="price" type="number" name="price" value="#">
                                    @error('price')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="quantity">Quantity</label>
                                    {{-- <input class="form-control" id="quantity" type="number" name="quantity" value="{{ old('quantity', $product->quantity) }}"> --}}
                                    <input class="form-control" id="quantity" type="number" name="quantity" value="#">
                                    @error('quantity')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="category_id">Category</label>
                                    <select name="category_id" id="category_id" class="form-control">
                                        <option value="">- Select category -</option>
                                        {{-- @forelse($categories as $category) --}}
                                            {{-- <option value="{{ $category->id }}" {{ old('category_id') || $product->category_id == $category->id ? 'selected' : null }}> --}}
                                            <option value="#" >
                                                {{-- {{ $category->name }} --}}
                                                asik
                                            </option>
                                        {{-- @empty --}}
                                        {{-- @endforelse --}}
                                    </select>
                                    @error('category_id')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="tags">Tags</label>
                                    <select name="tags[]" id="tags" class="form-control select2" multiple="multiple">
                                        {{-- @forelse($tags as $tag) --}}
                                            {{-- <option value="{{ $tag->id }}" {{ in_array($tag->id, $product->tags->pluck('id')->toArray()) ? 'selected' : null }} >{{ $tag->name }}</option> --}}
                                            <option value="" >asik</option>
                                        {{-- @empty --}}
                                        {{-- @endforelse --}}
                                    </select>
                                    @error('tags')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-12">
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="">- Select Status-</option>
                                        {{-- <option value="1" {{ old('status', $product->status) == "Active" ? 'selected' : null }}>Active</option> --}}
                                        <option value="1" >Active</option>
                                        {{-- <option value="0" {{ old('status', $product->status) == "Inactive" ? 'selected' : null }}>Inactive</option> --}}
                                        <option value="0" >Inactive</option>
                                    </select>
                                    @error('status')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>
                    </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                <label for="description" class="text-small text-uppercase">{{ __('Description') }}</label>
                                {{-- <textarea name="description" rows="3" class="form-control summernote">{!! old('description', $product->description) !!}</textarea> --}}
                                <textarea name="description" rows="3" class="form-control summernote"></textarea>
                                @error('description')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                <label for="details" class="text-small text-uppercase">{{ __('details') }}</label>
                                <textarea name="details" rows="3" class="form-control summernote"></textarea>
                                @error('details')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="images">{{ __('images') }}</label>
                                <br>
                                <div class="file-loading">
                                    <input type="file" name="images[]" id="product-images" class="file-input-overview" multiple="multiple">
                                </div>
                                @error('images')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="form-group pt-4">
                            <button class="btn btn-primary" type="submit" name="submit">{{ __('Save') }}</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
@endsection

@push('script')
<script src="{{ asset('backend/vendor/select2/js/select2.full.min.js') }}"></script>
    <script>
        $(function () {
            // summernote
            $('.summernote').summernote({
                tabSize: 2,
                height: 200,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });

            // select2
            function matchStart(params, data) {
                // If there are no search terms, return all of the data
                if ($.trim(params.term) === '') {
                    return data;
                }

                // Skip if there is no 'children' property
                if (typeof data.children === 'undefined') {
                    return null;
                }

                // `data.children` contains the actual options that we are matching against
                var filteredChildren = [];
                $.each(data.children, function (idx, child) {
                    if (child.text.toUpperCase().indexOf(params.term.toUpperCase()) == 0) {
                        filteredChildren.push(child);
                    }
                });

                // If we matched any of the timezone group's children, then set the matched children on the group
                // and return the group object
                if (filteredChildren.length) {
                    var modifiedData = $.extend({}, data, true);
                    modifiedData.children = filteredChildren;

                    // You can return modified objects from here
                    // This includes matching the `children` how you want in nested data sets
                    return modifiedData;
                }

                // Return `null` if the term should not be displayed
                return null;
            }


    </script>
@endpush