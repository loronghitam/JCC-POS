@extends('layouts.app')

@section('content')
   <div class="container">
    <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex">
                <h6 class="m-0 font-weight-bold text-primary">
                    {{ __('Categories') }}
                </h6>
                <div class="ml-auto">
                    <a href="/category/create" class="btn btn-primary">
                        <span class="icon text-white-50">
                            <i class="fa fa-plus"></i>
                        </span>
                        <span class="text">{{ __('New category') }}</span>
                    </a>
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
                    @forelse($category as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <span class="badge badge-primary">No image</span>
                            </td>
                            <td>
                                <a href="#">
                                    {{ $data->name }}
                                </a>
                            </td>
                            <td></td>
                            <td>asik</td>
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <a href="/category/edit" class="btn btn-sm btn-primary">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <form method="POST" asction="{{route('category.destroy',$data)}}" >
                                    @csrf
                                    @method('DELETE')
                                    {{-- <a href="{{ route("showProblemEditPage",[$problemIdParameter]) }}">Button</button> --}}
                                    {{-- <a href="{{route('category.delete')}}" class="btn btn-sm btn-danger" type="submit"><i class="fa fa-trash"></i></a> --}}
                                    <button class="btn btn-sm btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                                </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="text-center" colspan="6">No categories found.</td>
                        </tr>
                    @endforelse
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
