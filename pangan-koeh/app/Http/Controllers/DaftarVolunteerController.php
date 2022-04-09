<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarVolunteerController extends Controller
{
    public function index()
    {
        return view('main.DaftarVolunteer');
    }

    // public function store(Request $request)
    // {
    //     $request
    // }
}
