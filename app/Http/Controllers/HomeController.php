<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $ac=auth()->user()->acctype;
        switch($ac){
            case 'a':
            // return view('dashboard.master');
            return view('userP.index')->with('ac',$ac);
            break;
            default:
            // return view('dashboard.master');
            return view('userP.index')->with('ac',"other");
                break;
        }
    }
    public function changePassword()
    {
        return view('auth.changePassword');
    }
    public function changePasswordProcess(Request $req)
    {

        $validate = $req->validate([
            'password' => 'required|confirmed|min:6'
        ]);


        DB::table('users')
            ->where('id', auth()->user()->id)
            ->update(['password' => bcrypt($req['password'])]);
        return back()->with('success','Password Changed!!!');
    }
}
