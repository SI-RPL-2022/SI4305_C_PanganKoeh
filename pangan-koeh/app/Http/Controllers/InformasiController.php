<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use App\Models\Pangan;
use App\Models\Market;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

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
            "informasis" => Informasi::all(),
            'pasar' => Market::all()
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
            'categories' => Pangan::all(),
            'pasar' => Market::all()
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
        $validate = $request->validate([
            'judul' => 'required|max:255',
            'slug' => 'required|unique:informasis',
            'category_id' => 'required',
            'image' => 'image|file|max:2048',
            'body' => 'required'
        ]);

        if ($request->file('image')) {
            $validate['image'] = $request->file('image')->store('artikel-images');
        }

        $validate['excerpt'] = Str::limit(strip_tags($request->body), 200);

        //return($validate);

        Informasi::create($validate);
        session()->flash('success', 'Artikel baru berhasil ditambahkan!');
        return redirect('/Informasi')->with(['success', 'Artikel baru berhasil ditambahkan!', 'pasar' => Market::all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Informasi $informasi)
    {
        return view('main.IsiInformasi', [
            "isiInformasi" => $informasi,
            'pasar' => Market::all()
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
            'categories' => Pangan::all(),
            'pasar' => Market::all()
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
            'category_id' => 'required',
            'image' => 'image|file|max:2048',
            'body' => 'required'
        ];

        if ($request->slug != $dataInfo->slug) {
            $rules['slug'] = 'required|unique:informasis';
        }

        $validate = $request->validate($rules);

        //return($validate);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validate['image'] = $request->file('image')->store('artikel-images');
        }

        $validate['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Informasi::where('id', $id)
            ->update($validate);
        session()->flash('success', 'Artikel baru berhasil diperbarui!');
        return redirect('/Informasi')->with(['success', 'Artikel baru berhasil diperbarui!', 'pasar' => Market::all()]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = Informasi::where('id', $id)->first();

        if ($artikel->image) {
            Storage::delete($artikel->image);
        }

        Informasi::destroy($id);
        session()->flash('success', 'Artikel berhasil dihapus!');
        return redirect('/Informasi')->with(['success', 'Artikel berhasil dihapus!', 'pasar' => Market::all()]);
    }

    public function cekSlug(Request $request)
    {
        $slug = SlugService::createSlug(Informasi::class, 'slug', $request->judul);
        return response()->json(['slug' => $slug]);
    }
}
