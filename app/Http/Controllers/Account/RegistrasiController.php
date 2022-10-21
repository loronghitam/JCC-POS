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

    public function login(Request $request)
    {
        // Mengambil data user database user
        $user = DB::table('users')->where(
            'email',
            $request->email
        )->first();
        // !Mengambil data user database user

        // mengambil data user dari haisl inputan
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        // mengambil data user dari hasil inputan

        Auth::attempt($data);

        if (Auth::check()) {
            // Login masuk kehalaman dashboard
            return redirect()->route('home');
            // !Login Masuk kehalam dashboard
        }

        return 'error';
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->to('/');
    }
}
