<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
{
    //
    function index(){
        return view('sales.dashboard.index');
    }
    function profile(){
        return view('sales.profile.index');
    }
    function settings(){
        return view('sales.settings.index');
    }
}
