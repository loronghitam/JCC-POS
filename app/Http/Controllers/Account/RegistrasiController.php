<?php

namespace App\Http\Controllers\Account;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;

class RegistrasiController extends Controller
{

    public function index()
    {
        return view('auth.registrasi');
    }

    public function indexLogin()
    {
        return view('auth.login');
    }

    public function register(Request $request)
    {
        DB::transaction(function () use ($request) {
            $data = [
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ];

            User::create($data);
        });

        return redirect('login')->with('success', 'Akun Berhasil Dibuat Silah login menggunakan akun yang telah tadi dibuat');
    }
}
