<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.register', [
            'title' => 'Startup Foodiee - Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns',
            'password' => 'required|min:8|max:15'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);


        return redirect('/login')->with('success', 'Registration Berhasil! Silahkan Login');
    }
}
