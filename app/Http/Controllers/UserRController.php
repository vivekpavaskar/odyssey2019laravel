<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Registration;

class UserRController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth','registrations']);
    }

    public function participants()
    {
        $participants = DB::table('registrations')
            ->join('users', 'users.id', '=', 'registrations.uid')
            ->join('events', 'events.id', '=', 'registrations.eid')
            ->get();
        return view('userR.participants')->with('participants',$participants);
    }

    public function payment($id)
    {
        $reg=Registration::find($id);
        $reg->payment="Confirmed";
        $reg->save();
        return back()->with('success','Status Changed!!');
    }
}
