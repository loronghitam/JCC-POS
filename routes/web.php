<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

include_once('includes/auth/auth.php');


Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    });

    include_once('includes/admin/product.php');
    include_once('includes/admin/category.php');
    include_once('includes/admin/product.php');
    include_once('includes/admin/tags.php');
});
