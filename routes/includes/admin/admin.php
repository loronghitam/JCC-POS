<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::get('', function () {
        return view('admin.dashboard');
    });
    include_once('product.php');
    include_once('category.php');
});
