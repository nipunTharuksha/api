<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('appointments','AppointmentController@index')->name('api-appointments');
Route::get('appointment/{date}','AppointmentController@show_basedOnDate')->name('api-appointments.show_basedOnDate  ');

Route::post('live-appointment','LiveAppointmentController@store')->name('api-live-appointments.create');

