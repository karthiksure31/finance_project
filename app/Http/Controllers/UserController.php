<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function index(){
        return view('users.dashboard.index');
    }
    function profile(){
        return view('users.profile.index');
    }
    function settings(){
        return view('users.settings.index');
    }
}
