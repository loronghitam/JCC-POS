@extends('layouts.app')

@push('style')
<link rel="stylesheet" href="{{ asset('backend/vendor/select2/css/select2.min.css') }}">
@endpush

@section('content')
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <h6 class="m-0 font-weight-bold text-primary">
                {{ __('Create Product')}}
            </h6>
            <div class="ml-auto">
                <a href="{{ route('product') }}" class="btn btn-primary">
                    <span class="icon text-white-50">
                        <i class="fa fa-home"></i>
                    </span>
                    <span class="text">{{ __('Back to products') }}</span>
                </a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="name">Name</label>
                            {{-- <input class="form-control" id="name" type="text" name="name" value="{{ old('name', $product->name) }}">
                            --}}
                            <input class="form-control" id="name" type="text" name="name" value="">
                            @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="price">Price</label>
                            {{-- <input class="form-control" id="price" type="number" name="price" value="{{ old('price', $product->price) }}">
                            --}}
                            <input class="form-control" id="price" type="number" name="price" value="#">
                            @error('price')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="stok">Quantity</label>
                            {{-- <input class="form-control" id="quantity" type="number" name="quantity" value="{{ old('quantity', $product->quantity) }}">
                            --}}
                            <input class="form-control" id="quantity" type="number" name="stock" value="#">
                            @error('quantity')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="category_id">Category</label>
                            <select name="id_category" id="category_id" class="form-control">
                                <option value="" disabled selected>- Select category -</option>
                                @forelse($category as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @empty
                                    <option value="" disabled selected>FUCK U </option>
                                @endforelse
                            </select>
                            @error('category_id')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>

                </div>
                {{--  --}}
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="details" class="text-small text-uppercase">{{ __('details') }}</label>
                            <textarea name="detail" rows="3" class="form-control summernote"></textarea>
                            @error('details')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>

                {{-- <form action="{{route('delete', $item->id)}}" method="delete">
                    @csrf
                    @method('delete')
                    <a href="/post/post/{{$item->id}}" class="btn btn-danger btn-xs">Delete</a>
                </form> --}}

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
@endpush
