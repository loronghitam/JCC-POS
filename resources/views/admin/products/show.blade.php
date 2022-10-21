@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex">
                <h6 class="m-0 font-weight-bold text-primary">
                    {{-- {{ $product->name }} --}}
                    asik
                </h6>
                <div class="ml-auto">
                    <a href="#" class="btn btn-primary">
                        <span class="text">Back to products</span>
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <tbody>
                    <tr>
                        <th>Product Name</th>
                        {{-- <td>{{ $product->name }}</td> --}}
                        <td>asik</td>
                        <th>Price</th>
                        {{-- <td>{{ $product->price }}</td> --}}
                        <td>10.000</td>
                    </tr>
                    <tr>
                        <th>Quantity</th>
                        {{-- <td>{{ $product->quantity }}</td> --}}
                        <td>10</td>
                        <th>Status</th>
                        <td>activ</td>
                    </tr>
                    <tr>
                        <td>Category</td>
                        <td>asik</td>
                    </tr>
                    <tr>
                        <td>Created At</td>
                        {{-- <td>{{ $product->created_at ? $product->created_at->format('Y-m-d') : "Undefined" }}</td> --}}
                        <td>asik</td>
                        <td>Updated At</td>
                        {{-- <td>{{ $product->updated_at ? $product->updated_at->format('Y-m-d') : "Undefined" }}</td> --}}
                        <td>asik</td>
                    </tr>

                    <tr>
                        <th>Description</th>
                        <td colspan="3">asik jos</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
