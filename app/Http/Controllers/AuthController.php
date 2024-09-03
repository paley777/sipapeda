<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


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
    public function profile()
    {
        return view('dashboard.profile.edit');
    }
    public function save_profile(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Your current password does not match our records.']);
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect()->route('profile')->with('success', 'Password successfully updated.');
    }
}
