<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Market;

class ProfileController extends Controller
{
    public function index()
    {
        return view('main.Profile', [
            'pasar' => Market::all(),
        ]);
    }
}
