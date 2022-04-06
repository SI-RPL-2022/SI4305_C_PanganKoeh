<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            if ($request->email == 'admin@gmail.com') {
                $request->session()->regenerate();
                return redirect()->intended('/DaftarVolunteer');
            } elseif ($request->email != 'admin@gmail.com') {
                $request->session()->regenerate();
                return redirect()->intended('/home');
            }
        }

        return back()->with('loginError', 'Login gagal!, silakan coba lagi.');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
