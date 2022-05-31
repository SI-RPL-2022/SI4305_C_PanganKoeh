<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Market;
use App\Models\Pangan;
use Illuminate\Support\Facades\DB;

class GrafikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = DB::select(DB::raw("SELECT id_pasar,id_komoditas,harga,tanggal FROM `prices` WHERE tanggal = (SELECT MAX(tanggal) FROM `prices`) AND id_pasar = $id group by id_komoditas"));
        return view('main.Dashboard1', [
            'pasar' => Market::find($request->id_pasar),
            'pangan' => Pangan::all(),
            'panganspes' => Pangan::find($request->id_pangan),
            'grafik' => $result
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $result = DB::select(DB::raw("SELECT id_pasar,id_komoditas,harga,tanggal FROM `prices` WHERE tanggal = (SELECT MAX(tanggal) FROM `prices`) AND id_pasar = $id group by id_komoditas"));
        return view('main.Dashboard1', [
            'pasar' => Market::find($request->id_pasar),
            'pangan' => Pangan::all(),
            'panganspes' => Pangan::find($request->id_pangan),
            'grafik' => $result
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
        //
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
