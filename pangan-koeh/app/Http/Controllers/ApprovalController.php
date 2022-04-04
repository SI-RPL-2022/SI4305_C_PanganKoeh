<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class ApprovalController extends Controller
{
    public function index()
    {
        return view('main.approval');
    }
}
