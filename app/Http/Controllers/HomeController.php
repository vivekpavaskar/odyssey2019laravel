<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Announcement;
use App\Event;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $announcements=Announcement::all();
        return view('common.index')->with('announcements',$announcements);
    }

    public function changePassword()
    {
        return view('common.changePassword');
    }

    public function changePasswordProcess(Request $req)
    {
        $validate = $req->validate([
            'password' => 'required|confirmed'
        ]);

        $id=auth()->user()->id;
        $u = User::find($id);
        $u->password=bcrypt($req['password']);
        $u->save();
        return back()->with('success','Password Changed!!!');
    }

    public function announcements()
    {
        $announcements=Announcement::all();
        $events=Event::all();
        return view('common.announcements')->with('announcements',$announcements)->with('events',$events);
    }

    public function newAnnouncement(Request $req)
    {
        $ann= new Announcement;
        $ann->eid=$req->input('eid');
        $ann->description=$req->input('description');
        $ann->save();
        return back()->with('success','Announcement Posted!!!');
    }

    public function deleteAnnouncement($id)
    {
        $ann= Announcement::find($id);
        $ann->delete();
        return back()->with('success','Announcement Deleted!!!');
    }
}
