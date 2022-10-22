<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::resource('category', CategoryController::class);

// Route::prefix('category')->group(function () {
//     Route::get('/', 'CategoryController@index');

//     Route::get('/delete/{id}', 'CategoryController@destroy');
//     Route::get('/edit/{id}', 'CategoryController@edit');
//     // Route::get('/create', function () {
//     //     return view('admin.categories.create');
//     // });
//     Route::get('/create', 'CategoryController@create');
//     Route::post('/store', 'CategoryController@store')->name('create');
// });
