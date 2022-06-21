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
        $fav = DB::select(DB::raw("SELECT favourites.id,favourites.id_komoditas,pangans.name,pangans.gambar,CAST(AVG(prices.harga) AS INT) AS ratarata FROM prices,pangans,favourites WHERE pangans.id = favourites.id_komoditas AND favourites.user_id = $auth AND prices.id_komoditas = favourites.id_komoditas GROUP BY favourites.id_komoditas"));
        return view('main.favorit', [
            'test' => $test,
            'pangan' => Pangan::all(),
            'market1' => $market1,
            'market2' => $market2,
            'pasar' => Market::all(),
            'fav' => $fav
        ]);
    }
    public function hapus(Request $request)
    {
        // $data = Favourite::select('id')->where('id_komoditas', $request->id_komoditas);
        // $validatedData = $request->validate([
        //     'id' => 'required|max:255',
        //     'id_komoditas' => 'required|max:255',
        //     'user_id' => 'required|max:255'
        // ]);
        $auth = Auth::id();
        $fav = DB::select(DB::raw("SELECT favourites.id,favourites.id_komoditas,pangans.name,pangans.gambar,CAST(AVG(prices.harga) AS INT) AS ratarata FROM prices,pangans,favourites WHERE pangans.id = favourites.id_komoditas AND favourites.user_id = $auth AND prices.id_komoditas = favourites.id_komoditas GROUP BY favourites.id_komoditas"));

        Favourite::destroy($request->id);
        $request->session()->flash('berhasil', 'Komoditas Berhasil Dihapus Dari Favourite!');
        return redirect('/favorit')->with([
            'fav' => $fav,
            'pasar' => Market::all()
        ]);
    }

    public function hapus1(Request $request)
    {
        // $data = Favourite::select('id')->where('id_komoditas', $request->id_komoditas);
        // $validatedData = $request->validate([
        //     'id' => 'required|max:255',
        //     'id_komoditas' => 'required|max:255',
        //     'user_id' => 'required|max:255'
        // ]);
        $auth = Auth::id();
        $fav = DB::select(DB::raw("SELECT favourites.id,favourites.id_komoditas,pangans.name,pangans.gambar,CAST(AVG(prices.harga) AS INT) AS ratarata FROM prices,pangans,favourites WHERE pangans.id = favourites.id_komoditas AND favourites.user_id = $auth AND prices.id_komoditas = favourites.id_komoditas GROUP BY favourites.id_komoditas"));
        $test = DB::select(DB::raw("SELECT id_komoditas,pangans.name,pangans.gambar,CAST(AVG(harga) AS INT) AS ratarata FROM prices,pangans WHERE pangans.id = id_komoditas GROUP BY id_komoditas"));

        $test2 = DB::select(DB::raw("SELECT prices.id_komoditas,pangans.name, pangans.gambar, CAST(AVG(prices.harga) AS INT) AS ratarata FROM prices,pangans WHERE prices.id_komoditas NOT IN (SELECT favourites.id_komoditas FROM prices,pangans,favourites WHERE pangans.id = favourites.id_komoditas AND favourites.user_id = $auth AND prices.id_komoditas = favourites.id_komoditas GROUP BY favourites.id_komoditas) AND pangans.id = prices.id_komoditas GROUP BY prices.id_komoditas"));
        Favourite::destroy($request->id);
        $request->session()->flash('berhasil', 'Komoditas Berhasil Dihapus Dari Favourite!');
        return redirect('/')->with([
            'fav' => $fav,
            'test' => $test,
            'test2' => $test2,
            'pasar' => Market::all()
        ]);
    }
}
