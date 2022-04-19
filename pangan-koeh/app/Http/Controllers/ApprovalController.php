<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Volunteer;

class ApprovalController extends Controller
{
    public function index()
    {
        return view('main.approval', [
            'users' => User::whereNotNull('role')->get(),
            'volunteers' => Volunteer::all()
        ]);
    }
}
