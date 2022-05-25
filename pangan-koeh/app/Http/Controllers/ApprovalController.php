<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Volunteer;
use Illuminate\Support\Facades\DB;

class ApprovalController extends Controller
{
    public function index()
    {
        return view('main.approval', [
            'users' => User::whereNotNull('role')->get(),
            'volunteers' => Volunteer::all()
        ]);
    }
    public function terima(Request $request)
    {
        $data = User::find($request->id);
        $datav = Volunteer::where('user_id', $request->id)->get();
        $data->role = 'VLNTR';
        $datav[0]->role = 'VLNTR';
        $data->save();
        $datav[0]->save();

        return redirect('/approval');
    }
    public function tolak(Request $request)
    {
        $data = User::find($request->id);
        $datav = Volunteer::where('user_id', $request->id);
        $datav->delete();
        $data->role = 'USER';
        $data->save();

        return redirect('/approval');
    }

    public function active(Request $request)
    {
        $data = User::find($request->id);
        $datav = Volunteer::where('user_id', $request->id)->get();
        $data->role = 'VLNTR';
        $datav[0]->role = 'VLNTR';
        $data->save();
        $datav[0]->save();

        return redirect('/DataVolunteer');
    }

    public function inactive(Request $request)
    {
        $data = User::find($request->id);
        $datav = Volunteer::where('user_id', $request->id)->get();
        $data->role = 'USER';
        $datav[0]->role = 'USER';
        $data->save();
        $datav[0]->save();

        return redirect('/DataVolunteer');
    }
}
