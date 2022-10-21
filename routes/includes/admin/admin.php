<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('', function () {
        return view('admin.dashboard');
    });
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
