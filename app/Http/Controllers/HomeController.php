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
                return view('userA.index');
                break;
            case 'r':
                return view('userR.index');
                break;
            case 'p':
                return view('userP.index');
                break;
            default:
                return view('userC.index');
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
            'password' => 'required|confirmed'
        ]);


        DB::table('users')
            ->where('id', auth()->user()->id)
            ->update(['password' => bcrypt($req['password'])]);
        return back()->with('success','Password Changed!!!');
    }
}
