<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserCController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth','coordinator']);
    }

public function eventParticipants()
{
    $participants = DB::table('users')
            ->join('registrations', 'users.id', '=', 'registrations.uid')
            ->join('events', 'registrations.eid', '=', 'events.id')
            ->where('ecode',auth()->user()->acctype)
            ->get();
    $counts=count($participants);
    $confirmed=DB::table('users')
    ->join('registrations', 'users.id', '=', 'registrations.uid')
    ->join('events', 'registrations.eid', '=', 'events.id')
    ->where('ecode',auth()->user()->acctype)
    ->where('payment',"Confirmed")
    ->count();
    return view('userC.eventParticipants')->with('participants',$participants)->with('counts',$counts)->with('confirmed',$confirmed);
}
}
