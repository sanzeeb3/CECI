<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class CeciController extends Controller
{
    public function index()
    {
    	return view('index');
    }

    public function home()
    {
    	$user=Auth::user()->name;
    	return view('home')->with('user',$user);
    }
}
