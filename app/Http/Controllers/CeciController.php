<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class CeciController extends Controller
{
    public function index()
    {
    	$users=User::all();
    	return view('index')->with(['users'=>$users]);
    }

    public function report()
    {
    	return view('report');
    }
}
