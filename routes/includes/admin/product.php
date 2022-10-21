<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::prefix('/product')->group(function () {
    Route::get('/', function () {
        return view('admin.products.index');
    });
    // Route::get('/edit/{id}', function () {
    //     return view('admin.products.edit');
    // });
    Route::get('/create', function () {
        return view('admin.products.create');
    });

    Route::post('/create', [ProductController::class, 'create'])->name('create');
    Route::get('/edit/{id}', [ProductController::class, 'edit']);

    Route::post('/update/{id}', [ProductController::class, 'update'])->name('update');

    Route::get('/delete/{id}', [ProductController::class, 'destroy']);

    // Route::get('/delete/{id}', 'ProductController@destroy')->name('delete');

    Route::get('/show', function () {
        return view('admin.products.show');
    });

});
