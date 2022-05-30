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
        $result = DB::select(DB::raw("SELECT markets.name AS namapasar,pangans.name AS namapangan,prices.harga,prices.tanggal,markets.alamat FROM markets LEFT JOIN pangans ON markets.id = pangans.id_pasar LEFT JOIN prices ON markets.id = prices.id_pasar WHERE tanggal = (SELECT MAX(tanggal) FROM `prices` WHERE id_pasar = $id) group BY pangans.name"));
        // $data = "";
        // foreach ($result as $val) {
        //     $data = $val;
        // }
        // $test = ;
        // dd(compact($result));
        return view('main.DetailPasar', [
            'result' => $result
        ]);
    }
}
