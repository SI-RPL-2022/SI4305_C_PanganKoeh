<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataVolunteerController extends Controller
{
    public function index()
    {
        return view('main.DataVolunteer');
    }
}
