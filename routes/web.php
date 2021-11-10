<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route::get('/customer',[CustomerController::class,'index']);

// Route::post('/add', function () {
//    $add =new Add();
//    $add->firstname=request('fname');
//    $add->lastname=request('lname');
//    $add->email=request('email');
//    $add->phone=request('phno');
//    $add->save();
//    return redirect('/add');

// });

// Route::get('/addcustomer',[CustomerController::class,'create'])->name('add');

// Route::post('/addcustomer', [CustomerController::class,'store']);
// Route::get('/editcustomer/{id}',[CustomerController::class,'edit']);
// Route::post('/editcustomer',[CustomerController::class,'update'])->name('update');

// Route::get('/deletecustomer/{id}',[CustomerController::class,'destroy']);

// Route::apiResource('member',MemberController::class);
Route::resource('/customer',CustomerController::class);
Route::resource('/employee',EmployeeController::class);
