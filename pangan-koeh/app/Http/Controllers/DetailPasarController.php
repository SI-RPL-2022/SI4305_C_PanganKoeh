<?php

namespace App\Http\Controllers;

use App\Models\Market;
use App\Models\Pangan;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailPasarController extends Controller
{
    public function index($id)
    {
        $result = DB::select(DB::raw("SELECT id_pasar,id_komoditas,harga,tanggal FROM `prices` WHERE tanggal = (SELECT MAX(tanggal) FROM `prices`) AND id_pasar = $id group by id_komoditas"));
        // $data = "";
        // foreach ($result as $val) {
        //     $data = $val;
        // }
        // $test = ;
        // dd(compact($result));
        return view('main.DetailPasar', [
            'result' => $result,
            'pasar' => Market::find($id),
            'pangan' => Pangan::all()
        ]);
    }
}
