<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function signin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Email wajib di isi',
            'password.required' => 'Password wajib di isi',
        ]);


        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        $user = Login::where('email', $credentials['email'])->where('password', $credentials['password'])->first();

        if ($user) {
            $request->session()->regenerate();
            Session::put('user', $user);

            // Redirect based on user role
            if ($user->role == '1') {
                return redirect()->route('dashbord'); // Redirect to admin dashboard
            } elseif ($user->role == '2') {
                return redirect()->route('index'); // Redirect to user dashboard or home
            }
        }

        // Autentikasi gagal
        return back()->withInput()->withErrors(['email' => 'Login gagal. Periksa kembali kredensial Anda.']);
    }

    public function logout()
    {
        // Hapus semua data sesi pengguna
        Session::flush();

        // Redirect ke halaman login atau halaman lain yang sesuai
        return redirect()->route('login');
    }
}
