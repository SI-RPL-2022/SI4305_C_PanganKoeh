<?php

namespace App\Http\Controllers;

use App\Models\Market;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PasarTerdekatController extends Controller
{
    public function index()
    {
        return view('main.PasarTerdekat', [
            'pasar' => Market::all(),
        ]);
    }

    public function find(Request $request)
    {
        // $validatedData = $request->validate([
        //     'id' => 'required|max:255',
        // ]);
        // dd($request->id);
        $data = DB::select(DB::raw("SELECT * FROM `markets` WHERE id = $request->id"));
        // dd($data);
        return view('main.PasarTerdekat1', [
            'pasar' => $data,
            'kec' => Market::all(),
        ]);
    }
}
