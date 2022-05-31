<?php

namespace App\Http\Controllers;

use App\Models\Volunteer;
use App\Models\User;
use App\Models\Market;
use Illuminate\Http\Request;

class RegisterVolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('main.DaftarVolunteer', [
            'pasar' => Market::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('main.DaftarVolunteer', [
            'pasar' => Market::all(),
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
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'ttl' => 'required|max:255',
            'jk' => 'required|max:255',
            'pekerjaan' => 'required|max:255',
            'gambar' => 'image|file|max:3072',
            'role' => 'required|max:255'
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['gambar'] = $request->file('gambar')->store('post-images');
        // return ($validatedData);

        // if ($validatedData['name'] != auth()->user()->name) {
        //     return redirect()->intended('Profile');
        // }
        // return back()->with('namatidaksama', 'Harap Memasukan Identitas yang sesuai');


        Volunteer::create($validatedData);
        $data = User::find($request->id);
        // // dd($data);
        // // return $request->input();
        $data->role = "WAIT";
        $data->save();
        // auth()->user()->role == "WAIT";

        return redirect('Profile');
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('main.UbahProfile', [
            'user' => User::where('id', $id)->get()
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
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'no' => 'required|max:255',
            'alamat' => 'required|max:255',
        ]);
        User::where('id', $request->id)->update($validatedData);
        return redirect('/Profile');
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
}
