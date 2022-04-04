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
            'role' => 'required|in:admin,user'
        ]);

        $role = null;
        if ($request->role == 'USER') {
            $role = 'USER';
        } elseif ($request->role == 'ADM') {
            $role = 'ADM';
        }

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if ($request->role == 'USER') {
                return redirect()->intended('/home');
            } elseif ($request->role == 'ADM') {
                return redirect()->intended('/DaftarVolunteer');
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
