<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Registration;
use Illuminate\Support\Facades\DB;


class UserPController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth','user']);
    }

    public function registerEvents()
    {
        $events=Event::all();
        return view('userP.registerEvents')->with('events',$events);
    }

    public function registerEventForm($id)
    {
        $type=Event::find($id)->type;
        // dd($type);
        if($type=="Team"){
            return view('userP.registerEventForm')->with('type',$type)->with('id',$id);
        }
        else{
            return back();
        }

    }

    public function registerEventFormSolo($id)
    {
        $check=Registration::where('uid',auth()->user()->id)->where('eid',$id)->count();
        if($check>0){
            return back()->with('error',"You are Already Registered!!");
        }
        $reg=new Registration;
        $reg->uid=auth()->user()->id;
        $reg->eid=$id;
        $reg->team="Solo";
        $reg->payment="Not Confirmed";
        $reg->save();
        return back()->with('success',"You are Registered!!");
    }

    public function registerEventFormTeam($id,Request $req)
    {
        // dd($id);
        $check=Registration::where('uid',auth()->user()->id)->where('eid',$id)->count();
        if($check>0){
            return back()->with('error',"You are Already Registered!!");
        }
        $reg=new Registration;
        $reg->uid=auth()->user()->id;
        $reg->eid=$id;
        $reg->team=$req->input("team");
        $reg->payment="Not Confirmed";
        $reg->save();
        return back()->with('success',"You are Registered!!");
    }

    public function participationDetails()
    {
        $id=auth()->user()->id;
        $participations = DB::table('registrations')
            ->join('events', 'registrations.eid', '=', 'events.id')
            ->where('uid',$id)
            ->get();
        // dd($participations);
        return view('userP.participationDetails')->with('participations',$participations);
    }
}
