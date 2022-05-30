<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Market;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        return view('main.home', [
            'pasar' => Market::all(),
        ]);
    }
}
