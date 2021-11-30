<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
// use App\Http\Controllers\CustomerloginController;
// use App\Http\Controllers\EmployeeloginController;

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

Route::group([ 'middleware'=>['isadmin','auth']], function(){

    Route::get('/dashboard', [HomeController::class, 'admin']); 

});

Route::group(['middleware'=>['isemployee','auth']], function(){

    Route::get('/Employeepage', [HomeController::class, 'emp']); 

});

Route::group(['middleware'=>['iscustomer','auth']], function(){

    Route::get('/Customerpage', [HomeController::class, 'cus']); 

});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('/customer',CustomerController::class);
Route::resource('/employee',EmployeeController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
