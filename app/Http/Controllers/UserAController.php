<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserAController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth','admin']);
    }

    public function events()
    {
        $events=DB::table('events')->get();
        return view('userA.events')->with('events',$events);
    }

    public function newEvent(Request $req)
    {

        DB::table('events')->insert([
            'ecode' => $req->input('ecode'),
            'event' => $req->input('event'),
            'dept' => $req->input('dept')
            ]);
        return back()->with('success',"Data Inserted!!");
    }
    public function deleteEvent($id)
    {
        // dd($id);
        DB::table('events')->where('id','=',$id)->delete();
        return back()->with('success',"Data Deleted!!");

    }
    public function registration()
    {
        return view('userA.registration');
    }



}
