<?php

use Illuminate\Support\Facades\Route;



Route::get('shop', function () {
    return view('guest.shop.index');
});

Route::get('show', function () {
    return view('guest.product.detail');
});

Route::get('cart', function () {
    return view('guest.cart.cart');
});
