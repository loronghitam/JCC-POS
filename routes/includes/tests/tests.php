<?php

use Illuminate\Support\Facades\Route;


Route::prefix('admin')->group(function () {
    Route::get('product', function () {
        return view('admin.tags.index');
    });
    Route::get('edit', function () {
        return view('admin.tags.edit');
    });
    Route::get('create', function () {
        return view('admin.tags.create');
    });
    Route::get('show', function () {
        return view('admin.tags.show');
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
