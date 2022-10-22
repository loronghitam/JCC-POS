<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Account\LoginController;
use App\Http\Controllers\Account\LogoutController;

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [LoginController::class, 'index']);
    Route::post('/login', [LoginController::class, 'login'])->name('login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
});

