<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Market;
use App\Models\Pangan;
use App\Models\Price;
use Illuminate\Support\Facades\DB;

class PerbandinganHargaController extends Controller
{
    public function index()
    {
        $market1 = DB::select(DB::raw("SELECT DISTINCT prices.id_komoditas,pangans.name,prices.id_pasar, prices.tanggal,prices.harga from pangans,prices,(SELECT id_komoditas,id_pasar,max(tanggal) as tanggal FROM `prices` WHERE id_pasar = 1 GROUP BY id_komoditas) as max_harga WHERE prices.id_komoditas = max_harga.id_komoditas AND prices.tanggal = max_harga.tanggal AND prices.id_pasar = max_harga.id_pasar AND prices.id_komoditas = pangans.id GROUP BY id_komoditas"));
        $market2 = DB::select(DB::raw("SELECT DISTINCT prices.id_komoditas,pangans.name,prices.id_pasar, prices.tanggal,prices.harga from pangans,prices,(SELECT id_komoditas,id_pasar,max(tanggal) as tanggal FROM `prices` WHERE id_pasar = 2 GROUP BY id_komoditas) as max_harga WHERE prices.id_komoditas = max_harga.id_komoditas AND prices.tanggal = max_harga.tanggal AND prices.id_pasar = max_harga.id_pasar AND prices.id_komoditas = pangans.id GROUP BY id_komoditas"));
        return view('main.PerbandinganHarga', [
            'harga' => Price::all(),
            'pasar' => Market::all(),
            'pangan' => Pangan::all(),
            'pasar1' => $market1,
            'pasar2' => $market2
        ]);
    }
    public function perbandingan(Request $request)
    {
        // dd($request->namaKomoditas);
        $market1 = DB::select(DB::raw("SELECT DISTINCT prices.id_komoditas,pangans.name,prices.id_pasar, prices.tanggal,prices.harga from pangans,prices,(SELECT id_komoditas,id_pasar,max(tanggal) as tanggal FROM `prices` WHERE id_pasar = $request->pasar1 GROUP BY id_komoditas) as max_harga WHERE prices.id_komoditas = max_harga.id_komoditas AND prices.tanggal = max_harga.tanggal AND prices.id_pasar = max_harga.id_pasar AND prices.id_komoditas = pangans.id GROUP BY id_komoditas"));
        $market2 = DB::select(DB::raw("SELECT DISTINCT prices.id_komoditas,pangans.name,prices.id_pasar, prices.tanggal,prices.harga from pangans,prices,(SELECT id_komoditas,id_pasar,max(tanggal) as tanggal FROM `prices` WHERE id_pasar = $request->pasar2 GROUP BY id_komoditas) as max_harga WHERE prices.id_komoditas = max_harga.id_komoditas AND prices.tanggal = max_harga.tanggal AND prices.id_pasar = max_harga.id_pasar AND prices.id_komoditas = pangans.id GROUP BY id_komoditas"));
        return view('main.PerbandinganHarga1', [
            'harga' => Price::all(),
            'pasar' => Market::all(),
            'pangan' => Pangan::all(),
            'pasar1' => $market1,
            'pasar2' => $market2,
            'id_komoditas' => $request->namaKomoditas,
            'pasarr1' => $request->pasar1,
            'pasarr2' => $request->pasar2,

        ]);
    }
}
