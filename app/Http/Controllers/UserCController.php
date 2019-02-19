<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserCController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth','coordinator']);
    }

public function eventParticipants()
{
    return view('userC.eventParticipants');
}
}
