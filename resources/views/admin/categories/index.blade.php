@extends('layouts.admin')

@section('content')
   <div class="container">
    <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex">
                <h6 class="m-0 font-weight-bold text-primary">
                    {{ __('Categories') }}
                </h6>
                <div class="ml-auto">
                    @can('category_create')
                    <a href="#" class="btn btn-primary">
                        <span class="icon text-white-50">
                            <i class="fa fa-plus"></i>
                        </span>
                        <span class="text">{{ __('New category') }}</span>
                    </a>
                    @endcan
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Product count</th>
                        <th>Parent</th>
                        <th class="text-center" style="width: 30px;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    {{-- @forelse($categories as $category) --}}
                        <tr>
                            <td>1</td>
                            <td>
                                {{-- @if($category->cover) --}}
                                    <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.honestdocs.id%2Fwaktu-yang-tepat-menarik-kondom-saat-melakukan-hubungan-seks&psig=AOvVaw3dRb0CMdHWY4kU1bkRWzAb&ust=1666375430729000&source=images&cd=vfe&ved=0CAwQjRxqFwoTCMCr4q2y7_oCFQAAAAAdAAAAABAE"
                                        width="60" height="60" alt="">
                                {{-- @else
                                    <span class="badge badge-primary">No image</span>
                                @endif --}}
                            </td>
                            <td><a href="#">
                                    {{-- {{ $category->name }} --}}
                                    asik
                                </a>
                            </td>
                            {{-- <td>{{ $category->products_count }}</td> --}}
                            <td>2</td>
                            {{-- <td>{{ $category->parent->name ?? '' }}</td> --}}
                            <td>asik</td>
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <a href="#" class="btn btn-sm btn-primary">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <form
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                                </form>
                                </div>
                            </td>
                        </tr>
                    {{-- @empty --}}
                        {{-- <tr>
                            <td class="text-center" colspan="6">No categories found.</td>
                        </tr> --}}
                    {{-- @endforelse --}}
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6">
                                <div class="float-right">
                                    {{-- {!! $categories->appends(request()->all())->links() !!} --}}
                                    asik
                                </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
   </div>
@endsection
