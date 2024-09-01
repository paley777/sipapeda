<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Jika login berhasil, redirect ke dashboard
            return redirect()->intended('dashboard');
        }

        // Jika login gagal, kembali ke halaman login dengan pesan error
        return redirect()
            ->back()
            ->withErrors(['email' => 'Invalid credentials.']);
    }

    public function dashboard()
    {
        return view('dashboard.index');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
