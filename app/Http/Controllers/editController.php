<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class editController extends Controller
{
    public function name(Request $request)
	{
	  	$update=User::where(['id'=>$request->pk])->first();
    	$update->name=$request->value;
		$update->update();
	}

	public function dob(Request $request)
	{
	  	$update=User::where(['id'=>$request->pk])->first();
    	$update->dob=$request->value;
		$update->update();
	}

	public function contract_start_date(Request $request)
	{
	  	$update=User::where(['id'=>$request->pk])->first();
    	$update->contract_start_date=$request->value;
		$update->update();
	}

	public function contract_end_date(Request $request)
	{
	  	$update=User::where(['id'=>$request->pk])->first();
    	$update->contract_end_date=$request->value;
		$update->update();
	}

	public function partner_organization(Request $request)
	{
	  	$update=User::where(['id'=>$request->pk])->first();
    	$update->partner_organization=$request->value;
		$update->update();
	}

	public function username(Request $request)
	{
	  	$update=User::where(['id'=>$request->pk])->first();
    	$update->username=$request->value;
		$update->update();
	}

}
