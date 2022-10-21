@extends('layouts.app')
@section('title', 'Shop products')
@section('content')
    <div class="shop-page-wrapper shop-page-padding ptb-100">
        <div class="container-fluid m-auto">
            <div class="row">
                <div class="col-lg-3">
                    @include('guest.shop.sidebar')
                </div>
                <div class="col-lg-9">
                    <livewire:product-component/>
                </div>
            </div>
        </div>
    </div>
@endsection

