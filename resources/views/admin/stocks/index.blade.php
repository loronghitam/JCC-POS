@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex">
                <h6 class="m-0 font-weight-bold text-primary">
                    {{ __('Order') }}
                </h6>
                <div class="ml-auto">
                    <a href="{{ route('product.create') }}" class="btn btn-primary">
                        <span class="icon text-white-50">
                            <i class="fa fa-plus"></i>
                        </span>
                        <span class="text">{{ __('New product') }}</span>
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Current Stock</th>
                            <th>Add Stock</th>
                            <th>Remove Stock</th>
                            <th class="text-center" style="width: 30px;"></th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
