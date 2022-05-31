<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Market;
use App\Models\Pangan;
use Illuminate\Support\Facades\DB;

class CobaChartController extends Controller
{
    public function barchart($id)
    {

        $result = DB::select(DB::raw("SELECT id_pasar,id_komoditas,harga,tanggal FROM `prices` WHERE tanggal = (SELECT MAX(tanggal) FROM `prices`) AND id_pasar = $id group by id_komoditas"));
        // $data = "";
        // foreach ($result as $val) {
        //     $data .= "[new Date('" . $val->tanggal . "'), " . $val->harga . "],";
        // }
        // // dd($data);
        // $chartData = $data;
        return view('main.Dashboard', [
            'pasar' => Market::find($id),
            'pangan' => Pangan::all(),
            'grafik' => $result
        ]);
    }
    public function linechart($id_pangan, $id_pasar)
    {
        $result = DB::select(DB::raw("SELECT id_pasar,id_komoditas,harga,tanggal FROM `prices` WHERE id_komoditas = $id_pangan AND id_pasar= $id_pasar group by tanggal ORDER BY `prices`.`tanggal` ASC"));
        // $data = "";
        // foreach ($result as $val) {
        //     $data .= "[new Date('" . $val->tanggal . "'), " . $val->harga . "],";
        // }
        // // dd($data);
        // $chartData = $data;
        return view('main.Dashboard1', [
            'pasar' => Market::find($id_pasar),
            'pangan' => Pangan::all(),
            'panganspes' => Pangan::find($id_pangan),
            'grafik' => $result
        ]);
    }
}
