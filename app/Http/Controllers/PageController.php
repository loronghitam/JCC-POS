<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function shop()
    {
        return view('guest.shop.index');
    }

    public function categories()
    {
        return view('guest.categories.index');
    }
}
