<?php

use App\Http\Controllers\Account\RegistrasiController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegistrasiController::class, 'index']);
    Route::post('/register', [RegistrasiController::class, 'register'])->name('register');
    Route::get('/login', [RegistrasiController::class, 'indexLogin']);
    Route::post('/login', [RegistrasiController::class, 'login'])->name('login');
});


Route::group(['middleware' => 'auth', 'middleware' => 'Admin'], function () {
    Route::get('/logout', [RegistrasiController::class, 'logout'])->name('logout');
});


