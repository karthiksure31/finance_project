<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    //
    function index(){
        return view('super_admin.dashboard.index');
    }
    function profile(){
        return view('super_admin.profile.index');
    }
    function settings(){
        return view('super_admin.settings.index');
    }
}
