<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Event;
use App\Registration;

class UserAController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth','admin']);
    }

    public function events()
    {
        $events=Event::all();
        return view('userA.events')->with('events',$events);
    }

    public function newEvent(Request $req)
{
        $e=new Event;
        $e->ecode=$req->input('ecode');
        $e->event=$req->input('event');
        $e->dept=$req->input('dept');
        $e->type=$req->input('type');
        $e->save();
        return back()->with('success',"Data Inserted!!");
    }

    public function deleteEvent($id)
    {
        $e=Event::find($id);
        $e->delete();
        return back()->with('success',"Data Deleted!!");
    }

public function coordinators()
{
    $events=Event::all();
    $coord=User::where('acctype','!=','a')->where('acctype','!=','p')->where('acctype','!=','r')->get();
    return view('userA.coordinators')->with('events',$events)->with('coord',$coord);
}

public function newCoordinator(Request $req)
    {
        if((User::where('email', $req->input('email'))->get()->count())>0){
            return back()->with('error',"Email Already used!!");
        }
        else{
        $u=new User();
        $u->email=$req->input('email');
        $u->password=bcrypt($req->input('password'));
        $u->fname=$req->input('fname');
        $u->lname=$req->input('lname');
        $u->acctype=$req->input('acctype');
        $u->save();
        return back()->with('success',"Data Inserted!!");
        }
    }

    public function deleteCoordinator($id)
    {
        User::find($id)->delete();
        return back()->with('success',"Coordinator Deleted!!");
    }

    public function registration()
    {
        $reg=User::where('acctype','r')->get();
        return view('userA.registration')->with('reg',$reg);
    }


    public function newRegistration(Request $req)
        {
            if((User::where('email', $req->input('email'))->get()->count())>0){
                return back()->with('error',"Email Already used!!");
            }
            else{
                $u=new User();
                $u->email=$req->input('email');
                $u->password=bcrypt($req->input('password'));
                $u->fname=$req->input('fname');
                $u->lname=$req->input('lname');
                $u->acctype='r';
                $u->save();
            return back()->with('success',"Data Inserted!!");
            }
        }

        public function deleteRegistration($id)
    {
        User::find($id)->delete();
        return back()->with('success',"Registration Deleted!!");
    }


}
