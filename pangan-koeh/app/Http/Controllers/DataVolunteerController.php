<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Volunteer;

class DataVolunteerController extends Controller
{
    public function index()
    {
        return view('main.DataVolunteer', [
            'data' => Volunteer::all()
        ]);
    }
}
