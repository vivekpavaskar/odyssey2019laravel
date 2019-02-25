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

        $reg = DB::table('registrations')
            ->join('users', 'users.id', '=', 'registrations.uid')
            ->join('events', 'events.id', '=', 'registrations.eid')
            ->select('registrations.id','registrations.created_at','registrations.payment','registrations.receipt','users.fname','users.lname','users.mobile','events.ecode')
            ->latest()
            ->get();

            // dd($reg);
        return view('userR.participants')->with('participants',$reg);
    }

    public function payment($id,Request $req)
    {
        if ($req->input('receipt')=="") {
            return back()->with('error','Enter Receipt No.!!');
        } else {
            $reg=Registration::find($id);
            $reg->receipt=$req->input('receipt');
            $reg->payment="Confirmed";
            $reg->save();
            return back()->with('success','Status Changed!!');
        }
    }
}
