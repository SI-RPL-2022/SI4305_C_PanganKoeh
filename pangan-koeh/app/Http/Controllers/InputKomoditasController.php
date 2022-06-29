<?php

namespace App\Http\Controllers;

use App\Models\Market;
use App\Models\Pangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InputKomoditasController extends Controller
{
    public function index()
    {
        return view('main.MasterDataKomoditas', [
            'pasar' => Market::all(),
            'komoditas' => Pangan::all()
        ]);
    }

    public function create()
    {
        return view('main.InputMasterDataKomoditas', [
            'pasar' => Market::all()
        ]);
    }

    public function inputkomoditas(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'gambar' => 'image|file|max:3072'
        ]);

        if ($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('post-images/Pangan');
        }

        Pangan::create($validatedData);
        // dd($validatedData);
        session()->flash('success', 'Komoditas Berhasil Ditambahkan!');
        return redirect('/MasterDataKomoditas')->with(['success','Komoditas baru berhasil ditambahkan!','pasar' => Market::all()]);
    }

    public function edit($id)
    {
        $komoInfo = Pangan::where('id', $id)->first();

        return view('main.EditMasterDataKomoditas', [
            "info" => $komoInfo,
            'pasar' => Market::all()
        ]);
    }

    public function update(Request $request, $id)
    {
        $komoInfo = Pangan::where('id', $id)->first();

        $rules = [
            'name' => 'required|max:255',
            'gambar' => 'image|file|max:3072'
        ];

        $validate = $request->validate($rules);

        if ($request->file('gambar')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validate['gambar'] = $request->file('gambar')->store('post-images/Pangan');
        }

        Pangan::where('id',$id)
            ->update($validate);

        session()->flash('success', 'Komoditas Berhasil Diperbarui!');
        return redirect('/MasterDataKomoditas')->with(['success','Komoditas baru berhasil diperbarui!','pasar' => Market::all()]);
    }

    public function destroy($id)
    {
        $komoInfo = Pangan::where('id', $id)->first();

        if ($komoInfo->gambar) {
            Storage::delete($komoInfo->gambar);
        }

        Pangan::destroy($id);
        session()->flash('success', 'Komoditas Berhasil Dihapus!');
        return redirect('/MasterDataKomoditas')->with(['success','Komoditas berhasil dihapus','pasar' => Market::all()]);
    }
}
