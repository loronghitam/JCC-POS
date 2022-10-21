<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;


Route::prefix('/product')->group(function () {
    Route::get('/', function (Product $products) {
        return view('admin.products.index', ['products' => $products]);
    });
    // Route::get('/edit/{id}', function () {
    //     return view('admin.products.edit');
    // });
    Route::get('/create', function () {
        return view('admin.products.create');
    })->name('product.create');

    Route::post('/create', [ProductController::class, 'create'])->name('product.store');
    Route::get('/edit/{id}', [ProductController::class, 'edit']);

    Route::post('/update/{id}', [ProductController::class, 'update'])->name('update');

    Route::get('/delete/{id}', [ProductController::class, 'destroy']);

    // Route::get('/delete/{id}', 'ProductController@destroy')->name('delete');

    Route::get('/show', function () {
        return view('admin.products.show');
    });
});
