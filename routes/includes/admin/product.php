<?php

use Illuminate\Support\Facades\Route;


Route::prefix('/product')->group(function () {
    Route::get('/', function () {
        return view('admin.products.index');
    });
    Route::get('/edit', function () {
        return view('admin.products.edit');
    });
    Route::get('/create', function () {
        return view('admin.products.create');
    });
    Route::get('/show', function () {
        return view('admin.products.show');
    });
});
