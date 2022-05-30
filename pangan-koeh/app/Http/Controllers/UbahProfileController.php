<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Market;

class UbahProfileController extends Controller
{
    public function index()
    {
        return view('main.UbahProfile', [
            'pasar' => Market::all(),
        ]);
    }
}
