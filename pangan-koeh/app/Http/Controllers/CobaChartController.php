<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CobaChartController extends Controller
{
    public function linechart()
    {
        $result = DB::select(DB::raw("SELECT id_komoditas,harga,tanggal FROM `mytable` WHERE id_komoditas=1 group by harga "));
        $data = "";
        foreach ($result as $val) {
            $data .= "[new Date('" . $val->tanggal . "'), " . $val->harga . "],";
        }
        // dd($data);
        $chartData = $data;
        return view('main.Dashboard', compact('chartData'));
    }
}
