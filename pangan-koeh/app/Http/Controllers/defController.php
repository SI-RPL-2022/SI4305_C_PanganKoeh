<?php

namespace App\Http\Controllers;

use App\Models\Favourite;
use Illuminate\Http\Request;
use App\Models\Market;
use App\Models\Pangan;
use App\Models\Price;
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
        $auth = Auth::id();
        // $test = Favourite::where('id_user', Auth::id())->get();
        // $market1 = DB::select(DB::raw("SELECT DISTINCT prices.id_komoditas,pangans.name,prices.id_pasar, prices.tanggal,prices.harga from pangans,prices,(SELECT id_komoditas,id_pasar,max(tanggal) as tanggal FROM `prices` WHERE id_pasar = 1 GROUP BY id_komoditas) as max_harga WHERE prices.id_komoditas = max_harga.id_komoditas AND prices.tanggal = max_harga.tanggal AND prices.id_pasar = max_harga.id_pasar AND prices.id_komoditas = pangans.id GROUP BY id_komoditas"));
        $test = DB::select(DB::raw("SELECT id_komoditas,pangans.name,pangans.gambar,CAST(AVG(harga) AS INT) AS ratarata FROM prices,pangans WHERE pangans.id = id_komoditas GROUP BY id_komoditas"));
        $test2 = DB::select(DB::raw("SELECT prices.id_komoditas,pangans.name, pangans.gambar, CAST(AVG(prices.harga) AS INT) AS ratarata FROM prices,pangans WHERE prices.id_komoditas NOT IN (SELECT favourites.id_komoditas FROM prices,pangans,favourites WHERE pangans.id = favourites.id_komoditas AND favourites.user_id = $auth AND prices.id_komoditas = favourites.id_komoditas GROUP BY favourites.id_komoditas) AND pangans.id = prices.id_komoditas GROUP BY prices.id_komoditas"));
        $fav = DB::select(DB::raw("SELECT favourites.id_komoditas,pangans.name,pangans.gambar,CAST(AVG(prices.harga) AS INT) AS ratarata FROM prices,pangans,favourites WHERE pangans.id = favourites.id_komoditas AND favourites.user_id = $auth AND prices.id_komoditas = favourites.id_komoditas GROUP BY favourites.id_komoditas"));
        // $test = Favourite::where('user_id', Auth::user()->id)->get();
        return view('main.index', [
            'test' => $test,
            'test2' => $test2,
            'fav' => $fav
        ]);
    }

    public function favourite(Request $request)
    {
        $validatedData = $request->validate([
            'id_komoditas' => 'required|max:255',
            'user_id' => 'required|max:255'
        ]);
        $auth = Auth::id();
        // dd($request->user_id);
        $fav = DB::select(DB::raw("SELECT favourites.id_komoditas,pangans.name,pangans.gambar,CAST(AVG(prices.harga) AS INT) AS ratarata FROM prices,pangans,favourites WHERE pangans.id = favourites.id_komoditas AND favourites.user_id = $request->user_id AND prices.id_komoditas = favourites.id_komoditas GROUP BY favourites.id_komoditas"));
        // $market1 = DB::select(DB::raw("SELECT DISTINCT prices.id_komoditas,pangans.name,prices.id_pasar, prices.tanggal,prices.harga from pangans,prices,(SELECT id_komoditas,id_pasar,max(tanggal) as tanggal FROM `prices` WHERE id_pasar = 1 GROUP BY id_komoditas) as max_harga WHERE prices.id_komoditas = max_harga.id_komoditas AND prices.tanggal = max_harga.tanggal AND prices.id_pasar = max_harga.id_pasar AND prices.id_komoditas = pangans.id GROUP BY id_komoditas"));
        // $market2 = DB::select(DB::raw("SELECT DISTINCT prices.id_komoditas,pangans.name,prices.id_pasar, prices.tanggal,prices.harga from pangans,prices,(SELECT id_komoditas,id_pasar,max(tanggal) as tanggal FROM `prices` WHERE id_pasar = 2 GROUP BY id_komoditas) as max_harga WHERE prices.id_komoditas = max_harga.id_komoditas AND prices.tanggal = max_harga.tanggal AND prices.id_pasar = max_harga.id_pasar AND prices.id_komoditas = pangans.id GROUP BY id_komoditas"));
        Favourite::create($validatedData);
        // $data = Price::where('user_id')
        // $fav = Favourite::where('user_id', Auth::user()->id)->get();
        $test = DB::select(DB::raw("SELECT id_komoditas,pangans.name,pangans.gambar,CAST(AVG(harga) AS INT) AS ratarata FROM prices,pangans WHERE pangans.id = id_komoditas GROUP BY id_komoditas"));
        $test2 = DB::select(DB::raw("SELECT prices.id_komoditas,pangans.name, pangans.gambar, CAST(AVG(prices.harga) AS INT) AS ratarata FROM prices,pangans WHERE prices.id_komoditas NOT IN (SELECT favourites.id_komoditas FROM prices,pangans,favourites WHERE pangans.id = favourites.id_komoditas AND favourites.user_id = $auth AND prices.id_komoditas = favourites.id_komoditas GROUP BY favourites.id_komoditas) AND pangans.id = prices.id_komoditas GROUP BY prices.id_komoditas"));
        $request->session()->flash('berhasil', 'Komoditas Berhasil Dijadikan Favourite!');
        return redirect('/')->with([
            'fav' => $fav,
            'test' => $test,
            'test2' => $test2
        ]);
        // return view('main.index', [

        // ]);
    }
}
