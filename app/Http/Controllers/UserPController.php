<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth','user']);
    }

    public function registerEvents()
    {
        return view('userP.registerEvents');
    }
}
