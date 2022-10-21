<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('cart');
    }

    public function show()
    {
        return view('cart.show');
    }

    public function update(Request $request)
    {
        $request->validate([]);
    }

    public function destroy(Request $request)
    {
        $request->validate([
            'cart_id' =>'required'
        ]);
    }
}
