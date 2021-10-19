<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    function index(){
        return view('admins.dashboard.index');
    }
    function profile(){
        return view('admins.profile.index');
    }
    function settings(){
        return view('admins.settings.index');
    }
}
