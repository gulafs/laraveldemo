<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/add-user',function(){
    return view('add_users');
});

Route::post('/add-user',[UserController::class,'store']);
Route::get('/mumbai-user',[UserController::class,'showMumbaiUsers']);
Route::get('/user-joiningdate',[UserController::class,'showUserJoinedThisWeek']);
Route::get('/user-salary',[UserController::class,'showUserSalary']);
