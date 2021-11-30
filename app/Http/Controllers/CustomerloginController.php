<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CustomerloginController extends Controller
{
    //
    protected $redirectTo = RouteServiceProvider::CUS;
     public function index()
    {
    	$role=Auth::user()->role;
    	if($role=='cus')
    	{
    		return view('/Customerpage');
    	}
    	// else if($role=='cus')
    	// {
    	// 	return view('/Customerpage');
    	// }
    	else
    	{
    		return view('/login');
    	}
    }
}
