<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login', [
            'title' => 'Startup Foodiee - Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $authenticate = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (auth()->attempt($authenticate)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Login Gagal! Silahkan Cek Email dan Password Anda');
    }
}
