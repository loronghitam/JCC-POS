<?php

use Illuminate\Support\Facades\Route;


Route::prefix('admin')->group(function () {
    Route::get('product', function () {
        return view('admin.products.index');
    });
});



Route::get('shop', function () {
    return view('guest.shop.index');
});

Route::get('show', function () {
    return view('guest.product.detail');
});

Route::get('cart', function () {
    return view('guest.cart.cart');
});

Route::get('admin', function () {
    return view('admin.dashboard');
});
