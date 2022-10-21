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

include_once('includes/tests/tests.php');
include_once('includes/auth/auth.php');
include_once('includes/guest/guest.php');


Route::middleware(['admin', 'auth'])->group(function () {
    include_once('includes/admin/admin.php');
});
