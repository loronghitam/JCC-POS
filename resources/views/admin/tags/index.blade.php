@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <h6 class="m-0 font-weight-bold text-primary">
                {{ __('Tags') }}
            </h6>
            <div class="ml-auto">
                <a href="#" class="btn btn-primary">
                    <span class="icon text-white-50">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">{{ __('New tag') }}</span>
                </a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Product count</th>
                        <th class="text-center" style="width: 30px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @forelse($tags as $tag) --}}
                    <tr>
                        {{-- <td>{{ $loop->iteration }}</td> --}}
                        <td>1</td>
                        <td><a href="#">
                                asik
                                {{-- {{ $tag->name }} --}}
                            </a>
                        </td>
                        {{-- <td>{{ $tag->products_count }}</td> --}}
                        <td>2</td>
                        <td>
                            <div class="btn-group btn-group-sm">
                                <a href="#" class="btn btn-sm btn-primary">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <form "
                                    method=" POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" type="submit"><i
                                            class="fa fa-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    {{-- @empty --}}
                    <tr>
                        <td class="text-center" colspan="6">No tags found.</td>
                    </tr>
                    {{-- @endforelse --}}
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="6">
                            <div class="float-right">
                                {{-- {!! $tags->appends(request()->all())->links() !!} --}}
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection
