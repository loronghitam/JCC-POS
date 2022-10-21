<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {

        // mengambil data user dari haisl inputan
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        // mengambil data user dari hasil inputan

        Auth::attempt($data);

        if (Auth::check()) {
            // Login masuk kehalaman dashboard
            return redirect('/');
            // !Login Masuk kehalam dashboard
        }

        return redirect()->back()->with('message', 'Account tidak terdaftar mohon periksan kembail email atau password');
    }
}
