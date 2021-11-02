<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Add;

class AddController extends Controller
{
    //
    function index(){

		   $add =new Add();
		   $add->firstname=request('fname');
		   $add->lastname=request('lname');
		   $add->email=request('email');
		   $add->phone=request('phno');
		   $add->save();
		   return redirect('/add')->with('status',"Insert successfully");
    }
}
