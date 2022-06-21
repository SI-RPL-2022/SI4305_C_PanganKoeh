<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Market;

class DaftarVolunteerController extends Controller
{
    public function index()
    {
        return view('main.DaftarVolunteer', [
            'pasar' => Market::all()
        ]);
    }

    // public function store(Request $request)
    // {
    //     $request
    // }
}
