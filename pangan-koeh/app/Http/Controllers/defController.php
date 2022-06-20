<?php

namespace App\Http\Controllers;

use App\Models\Favourite;
use Illuminate\Http\Request;
use App\Models\Market;
use App\Models\Pangan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class defController extends Controller
{
    public function index()
    {
        // $x = 0;
        // foreach (Market::all() as $item) {
        //     echo "$market ++$x = DB::select(DB::raw("SELECT DISTINCT prices.id_komoditas,prices.id_pasar, prices.tanggal,prices.harga from prices,(SELECT id_komoditas,id_pasar,max(tanggal) as tanggal FROM `prices` WHERE id_pasar = 1 GROUP BY id_komoditas) as max_harga WHERE prices.id_komoditas = max_harga.id_komoditas AND prices.tanggal = max_harga.tanggal AND prices.id_pasar = max_harga.id_pasar GROUP BY id_komoditas"));"
        // }

        // $test = Favourite::where('id_user', Auth::id())->get();
        $market1 = DB::select(DB::raw("SELECT DISTINCT prices.id_komoditas,pangans.name,prices.id_pasar, prices.tanggal,prices.harga from pangans,prices,(SELECT id_komoditas,id_pasar,max(tanggal) as tanggal FROM `prices` WHERE id_pasar = 1 GROUP BY id_komoditas) as max_harga WHERE prices.id_komoditas = max_harga.id_komoditas AND prices.tanggal = max_harga.tanggal AND prices.id_pasar = max_harga.id_pasar AND prices.id_komoditas = pangans.id GROUP BY id_komoditas"));
        $market2 = DB::select(DB::raw("SELECT DISTINCT prices.id_komoditas,pangans.name,prices.id_pasar, prices.tanggal,prices.harga from pangans,prices,(SELECT id_komoditas,id_pasar,max(tanggal) as tanggal FROM `prices` WHERE id_pasar = 2 GROUP BY id_komoditas) as max_harga WHERE prices.id_komoditas = max_harga.id_komoditas AND prices.tanggal = max_harga.tanggal AND prices.id_pasar = max_harga.id_pasar AND prices.id_komoditas = pangans.id GROUP BY id_komoditas"));
        // $test = Favourite::where('user_id', Auth::user()->id)->get();
        return view('main.index', [
            'pasar1' => $market1,
            'pasar2' => $market2,
            'pasar' => Market::all(),
            'pangan' => Pangan::all(),
        ]);
    }

    public function favourite(Request $request)
    {
        $validatedData = $request->validate([
            'id_komoditas' => 'required|max:255',
            'user_id' => 'required|max:255'
        ]);
        $market1 = DB::select(DB::raw("SELECT DISTINCT prices.id_komoditas,pangans.name,prices.id_pasar, prices.tanggal,prices.harga from pangans,prices,(SELECT id_komoditas,id_pasar,max(tanggal) as tanggal FROM `prices` WHERE id_pasar = 1 GROUP BY id_komoditas) as max_harga WHERE prices.id_komoditas = max_harga.id_komoditas AND prices.tanggal = max_harga.tanggal AND prices.id_pasar = max_harga.id_pasar AND prices.id_komoditas = pangans.id GROUP BY id_komoditas"));
        $market2 = DB::select(DB::raw("SELECT DISTINCT prices.id_komoditas,pangans.name,prices.id_pasar, prices.tanggal,prices.harga from pangans,prices,(SELECT id_komoditas,id_pasar,max(tanggal) as tanggal FROM `prices` WHERE id_pasar = 2 GROUP BY id_komoditas) as max_harga WHERE prices.id_komoditas = max_harga.id_komoditas AND prices.tanggal = max_harga.tanggal AND prices.id_pasar = max_harga.id_pasar AND prices.id_komoditas = pangans.id GROUP BY id_komoditas"));
        Favourite::create($validatedData);
        $test = Favourite::where('user_id', Auth::user()->id)->get();
        return view('main.index', [
            'pasar1' => $market1,
            'pasar2' => $market2,
            'pasar' => Market::all(),
            'pangan' => Pangan::all(),
            'test' => $test
        ]);
    }
}
