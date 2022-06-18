<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use App\Models\Pangan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class InformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('main.informasi', [
            "informasis" => Informasi::all()
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('main.InputArtikel', [
            'categories' => Pangan::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request ->validate([
            'judul' => 'required|max:255',
            'slug' => 'required|unique:informasis',
            'topik' => 'required',
            'body' => 'required'
        ]);

        $validate['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Informasi::create($validate);

        return redirect('/Informasi')->with('succes', 'Artikel baru berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Informasi $informasi)
    {
        return view('main.IsiInformasi',[
            "isiInformasi" => $informasi
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function cekSlug(Request $request)
    {
        $slug = SlugService::createSlug(Informasi::class, 'slug', $request->judul);
        return response()->json(['slug' => $slug]);
    }
}
