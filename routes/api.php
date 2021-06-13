1<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleController;
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

Route::get('/schedules', [ScheduleController::class, 'index']);

Route::post('/schedules', function (){
    return Schedule::create([
        'bus_route_id'=>'002',
        'direction'=>'reverse',
        'start_timestamp'=>'2021-06-14 10:29:59',
        'end_timestamp'=>'2021-06-14 11:29:59'
    ]);
});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
