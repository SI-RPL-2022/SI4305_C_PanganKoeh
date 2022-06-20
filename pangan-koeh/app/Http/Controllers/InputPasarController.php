<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Market;

class InputPasarController extends Controller
{
    public function index()
    {
        return view('main.MasterDataPasar');
    }
    public function inputpasar(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'kecamatan' => 'required|max:255',
            'alamat' => 'required|max:255',
            'jam' => 'required|max:255',
            'foto1' => 'image|file|max:3072',
            'foto2' => 'image|file|max:3072',
            'foto3' => 'image|file|max:3072',
            'foto4' => 'image|file|max:3072',
        ]);
        $validatedData['foto1'] = $request->file('foto1')->store('post-images');
        $validatedData['foto2'] = $request->file('foto2')->store('post-images');
        $validatedData['foto3'] = $request->file('foto3')->store('post-images');
        $validatedData['foto4'] = $request->file('foto4')->store('post-images');
        // dd($validatedData);
        Market::create($validatedData);

        $request->session()->flash('success', 'Pasar Berhasil Diinput!');
        return redirect('/MasterDataPasar');
    }
}
