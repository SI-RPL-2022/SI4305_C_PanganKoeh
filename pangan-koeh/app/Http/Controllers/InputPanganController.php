<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Market;
use App\Models\Pangan;
use App\Models\Price;


class InputPanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('main.InputDataPangan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('main.InputDataPangan', [
            'pasar' => Market::all(),
            'pangan' => Pangan::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'id_pasar' => 'required|max:255',
            'namapangan' => 'required|max:255',
            'harga' => 'required|max:255',
            'tanggal' => 'required|max:255',
            'gambarpasar' => 'image|file|max:3072'
        ]);

        $validatedData['gambarpasar'] = $request->file('gambarpasar')->store('post-images');
        $validatedData['id_komoditas'] = $validatedData['namapangan'];
        $validatedData['kontributor'] = auth()->user()->name;

        // return $validatedData;
        Price::create($validatedData);
        $request->session()->flash('success', 'Data Harga Pangan Berhasil Diinput!');
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
