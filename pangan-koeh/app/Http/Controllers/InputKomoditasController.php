<?php

namespace App\Http\Controllers;

use App\Models\Market;
use App\Models\Pangan;
use Illuminate\Http\Request;

class InputKomoditasController extends Controller
{
    public function index()
    {
        return view('main.MasterDataKomoditas', [
            'pasar' => Market::all()
        ]);
    }
    public function inputkomoditas(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'gambar' => 'image|file|max:3072'
        ]);
        $validatedData['gambar'] = $request->file('gambar')->store('post-images');
        Pangan::create($validatedData);
        // dd($validatedData);
        $request->session()->flash('success', 'Komoditas Berhasil Diinput!');
        return redirect('/MasterDataKomoditas')->with(['pasar' => Market::all()]);
    }
}
