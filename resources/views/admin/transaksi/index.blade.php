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
                            <th>Nama</th>
                            <th>Current Stock</th>
                            <th>Price</th>
                            <th>Add Stock</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="{{ route('transaction.store') }}" method="POST">
                        @csrf
                        @forelse ($products as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->stock->stock }}</td>
                            <td>{{ $item->price }}</td>
                            <td>
                                    <input type="hidden" name="item{{$item->id}}" value="{{ $item->id }}">
                                    <input type="number" name="stock{{$item->id}}" min="1">
                                </td>
                            </tr>
                            @empty
                            <tr>
                                fuck u
                            </tr>
                            @endforelse
                            <tr>
                                <td colspan="4 d-flex">
                                    <button  class="btn btn-primary" type="submit" name="button" value="beli">Transaksi</button>

                                </td>
                            </tr>
                        </form>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
