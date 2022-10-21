<?php

use App\Http\Controllers\Account\RegistrasiController;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Contracts\Role;

Route::get('/', function () {
    return view('welcome')->name('home');
});

Route::group(['middleware' => 'guest'], function () {
    Route::post('/shop', [PageController::class, 'shop']);
    Route::get('/categories', [PageController::class, 'categories']);
    Route::post('/contac', [PageController::class, 'login']);
});
