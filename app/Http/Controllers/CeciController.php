<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class CeciController extends Controller
{
    public function index()
    {
    	$name=Auth::user()->name;
    	return view('index')->with('name',$name);
    }

    public function report()
    {
    	return view('report');
    }
}
