<?php

use Illuminate\Support\Facades\Route;






Route::get('shop', function () {
    return view('guest.shop.index');
});

Route::get('cart', function () {
    return view('guest.cart.cart');
});

Route::get('admin', function () {
    return view('layouts.admin');
});
