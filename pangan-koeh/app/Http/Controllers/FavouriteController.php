<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favourite;
use App\Models\Market;
use Illuminate\Support\Facades\Auth;
use App\Models\Pangan;
use Illuminate\Support\Facades\DB;

class FavouriteController extends Controller
{
    public function index()
    {
        $test = Favourite::where('user_id', Auth::id())->get();
        $auth = Auth::id();
        $market1 = DB::select(DB::raw("SELECT DISTINCT prices.id_komoditas,pangans.name,prices.id_pasar, prices.tanggal,prices.harga from pangans,prices,(SELECT id_komoditas,id_pasar,max(tanggal) as tanggal FROM `prices` WHERE id_pasar = 1 GROUP BY id_komoditas) as max_harga WHERE prices.id_komoditas = max_harga.id_komoditas AND prices.tanggal = max_harga.tanggal AND prices.id_pasar = max_harga.id_pasar AND prices.id_komoditas = pangans.id GROUP BY id_komoditas"));
        $market2 = DB::select(DB::raw("SELECT DISTINCT prices.id_komoditas,pangans.name,prices.id_pasar, prices.tanggal,prices.harga from pangans,prices,(SELECT id_komoditas,id_pasar,max(tanggal) as tanggal FROM `prices` WHERE id_pasar = 2 GROUP BY id_komoditas) as max_harga WHERE prices.id_komoditas = max_harga.id_komoditas AND prices.tanggal = max_harga.tanggal AND prices.id_pasar = max_harga.id_pasar AND prices.id_komoditas = pangans.id GROUP BY id_komoditas"));
        return view('main.favorit', [
            'test' => $test,
            'pangan' => Pangan::all(),
            'market1' => $market1,
            'market2' => $market2,
            'pasar' => Market::all()
        ]);
    }
}
