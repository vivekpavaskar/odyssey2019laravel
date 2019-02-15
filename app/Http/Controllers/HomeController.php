<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
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
            return view('userP.index')->with('ac',$ac);
                break;
            default:
            return view('userP.index')->with('ac',"other");
                break;
        }
    }
}
