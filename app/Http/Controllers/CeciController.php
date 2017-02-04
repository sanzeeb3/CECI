<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Report;

class CeciController extends Controller
{
    public function admin()
    {
    	$users=User::with('reports')->get();
    	return view('admin')->with(['users'=>$users]);
    }

    public function index()
    {
    	$user=User::with('reports')->where('id',auth()->user()->id)->first();
    	return view('index')->with('user',$user);
    }

    public function report()
    {
    	return view('report');
    }

    public function postReport(Request $request)
    {
    	$report=Report::create($request->all());
        $report->users()->attach(auth()->user()->id);
        return redirect('/');
    }
}
