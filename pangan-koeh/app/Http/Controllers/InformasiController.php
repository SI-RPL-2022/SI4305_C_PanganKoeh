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
            'image' => 'image|file|max:2048',
            'body' => 'required'
        ]);

        if ($request->file('image')) {
            $validate['image'] = $request->file('image')->store('artikel-images');
        }

        $validate['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Informasi::create($validate);

        return redirect('/Informasi')->with('success', 'Artikel baru berhasil ditambahkan!');
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
        $dataInfo = Informasi::where('id', $id)->first();

        return view('main.EditInformasi', [
            "info" => $dataInfo,
            'categories' => Pangan::all()
        ]);
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
        $dataInfo = Informasi::where('id', $id)->first();

        $rules = [
            'judul' => 'required|max:255',
            'topik' => 'required',
            'body' => 'required'
        ];

        if ($request->slug != $dataInfo->slug) {
            $rules['slug'] = 'required|unique:informasis';
        }

        $validate = $request->validate($rules);

        $validate['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Informasi::where('id', $id)
                    ->update([
                        'judul' => $validate['judul'],
                        'slug' => $validate['slug'],
                        'category_id' => $validate['topik'],
                        'excerpt' => $validate['excerpt'],
                        'body' => $validate['body']
                    ]);

        return redirect('/Informasi')->with('success', 'Artikel baru berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Informasi::destroy($id);

        return redirect('/Informasi')->with('success', 'Artikel berhasil dihapus!');
    }

    public function cekSlug(Request $request)
    {
        $slug = SlugService::createSlug(Informasi::class, 'slug', $request->judul);
        return response()->json(['slug' => $slug]);
    }
}
