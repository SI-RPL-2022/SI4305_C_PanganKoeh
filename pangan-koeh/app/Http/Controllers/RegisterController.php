<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'role' => 'required|max:255',
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'no' => 'required|max:255',
            'alamat' => 'required|max:255',
            'password' => 'required|min:5|max:255',
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);
        // $validatedData['role'] = 'USER';

        User::create($validatedData);


        return redirect('/login');
    }
}
