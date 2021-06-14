1<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Public routes

Route::post('/register',[AuthController::class, 'register']);
Route::post('/login',[AuthController::class, 'login']);



//Other routes which should  be added to admin
Route::post('/schedules',[ScheduleController::class, 'store']);
Route::post('/schedules/{id}',[ScheduleController::class, 'show']);
Route::post('/schedules/{id}',[ScheduleController::class, 'update']);
Route::post('/schedules{id}',[ScheduleController::class, 'destroy']);


//Protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::get('/schedules', [ScheduleController::class, 'index']);     //view schedules

    Route::post('/logout', [AuthController::class, 'logout']);


});


//Route::resource('schedules', ScheduleController::class);
//


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
