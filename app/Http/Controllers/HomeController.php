<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    //
    public function index()
    {
    	$role=Auth::user()->role;
    	if($role=='emp')
    	{
    		return view('/Employeepage');
    	}
    	else if($role=='cus')
    	{
    		return view('/Customerpage');
    	}
    	else
    	{
    		return view('/dashboard');
    	}
    }
}
