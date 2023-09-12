<?php
use App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

});




Route::get('users/mumbai',[UserController::class,"getUsersInMumbai"]);
Route::get('users/salary',[UserController::class,'getUserBysalary']);
Route::get('users/joined-this-week', [UserController::class,'UserJoinedWeek']);
Route::post('/users/add-user', 'UserController@store')->name('add-user');