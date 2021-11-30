<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class EmployeeloginController extends Controller
{
    //
    protected $redirectTo = RouteServiceProvider::EMP;
     public function index()
    {
    	$role=Auth::user()->role;
    	if($role=='emp')
    	{
    		return view('/Employeepage');
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
