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

        $pangan = Pangan::all();
        $result = DB::select(DB::raw("SELECT DISTINCT prices.id_komoditas, prices.tanggal,prices.harga from prices,(SELECT id_komoditas,max(tanggal) as tanggal FROM `prices` WHERE id_pasar = $id GROUP BY id_komoditas) as max_harga WHERE prices.id_komoditas = max_harga.id_komoditas AND prices.tanggal = max_harga.tanggal GROUP BY id_komoditas"));
        $data = "";
        foreach ($result as $item) {
            $data .= "['" . $pangan[($item->id_komoditas) - 1]->name . "', " . $item->harga . "],";
        }
        // dd($data);
        // $test = Market::find($id);
        // dd($test);
        $chartData = $data;
        return view('main.Dashboard', [
            'pasar1' => Market::find($id),
            'pangan' => Pangan::all(),
            'grafik' => $result,
            'data' => $chartData,
            'pasar' => Market::all()
        ]);
    }
    public function linechart($id_pangan, $id_pasar)
    {
        $panganspes = DB::select(DB::raw("SELECT * FROM `pangans` WHERE id = $id_pangan "));
        // dd($panganspes);
        $tes = DB::select(DB::raw("SELECT id_pasar,id_komoditas,harga,tanggal FROM `prices` WHERE id_pasar = $id_pasar AND id_komoditas= $id_pangan ORDER BY `prices`.`tanggal` DESC"));
        $result = DB::select(DB::raw("SELECT id_pasar,id_komoditas,harga,tanggal FROM `prices` WHERE id_komoditas = $id_pangan AND id_pasar= $id_pasar group by tanggal ORDER BY `prices`.`tanggal` ASC"));
        $data = "";
        foreach ($result as $val) {
            $data .= "[new Date('" . $val->tanggal . "'), " . $val->harga . "],";
        }
        // dd($data);
        $chartData = $data;
        return view('main.Dashboard1', [
            'pasar1' => Market::find($id_pasar),
            'pangan' => Pangan::all(),
            'panganspes' => $panganspes,
            'grafik' => $chartData,
            'tes' => $tes,
            'pasar' => Market::all()
        ]);
    }
}
