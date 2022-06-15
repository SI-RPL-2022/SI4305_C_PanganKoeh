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
        $result = DB::select(DB::raw("SELECT DISTINCT prices.id_komoditas, prices.tanggal,prices.harga from prices,(SELECT id_komoditas,max(tanggal) as tanggal FROM `prices` WHERE id_pasar = $id GROUP BY id_komoditas) as max_harga WHERE prices.id_komoditas = max_harga.id_komoditas AND prices.tanggal = max_harga.tanggal GROUP BY id_komoditas"));
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
