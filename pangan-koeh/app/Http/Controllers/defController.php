<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Market;

class defController extends Controller
{
    public function index()
    {
        return view('main.index', [
            'pasar' => Market::all(),
        ]);
    }
}
