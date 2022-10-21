<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::prefix('/category')->group(function () {
    Route::get('/delete/{id}', 'CategoryController@destroy');
    Route::get('/edit/{id}', 'CategoryController@edit');

    Route::get('/create', function () {
        return view('admin.categories.create');
    });
    Route::post('/create', 'CategoryController@create')->name('create');
});
