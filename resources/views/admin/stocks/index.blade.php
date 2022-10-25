@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex">
                <h6 class="m-0 font-weight-bold text-primary">
                    {{ __('Order') }}
                </h6>
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
                        @forelse ($products as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->stock->stock }}</td>
                            <td>
                                <form action="{{ route('stocks.update', $item->id) }}" method="POST">
                                    @csrf
                                    @method('put')
                                    <input type="hidden" name="id_product" value="{{ $item->id }}">
                                    <input type="number" name="stock" min="1">
                                    <button  class="btn btn-primary" type="submit" name="button" value="add">Add</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('stocks.update', $item->id) }}" method="POST">
                                    @csrf
                                    @method('put')
                                    <input type="hidden" name="id_product" value="{{ $item->id }}">
                                    <input type="number" name="stock" min="1">
                                    <button  class="btn btn-primary" type="submit" name="button" value="remove">remove</button>
                                </form>
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary">View</a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td class="text-center" colspan="12">No products found.</td>
                        </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
