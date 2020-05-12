<?php

use Illuminate\Support\Facades\Route;

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


    /*  $today = Carbon::now();
        dd($today->addDays(4));
        $date = Carbon::parse(new Carbon('last day of this month'));
        $now = Carbon::now();
        dd($date->format('Y-m'));
        $diff = $date->diffInDays($now);
        dd($now->addHour());
        $today = Carbon::now()->format('Y-m-d');
        $lastDay = (new Carbon('last day of last month'))->format('Y-m-d');

        dd((new DateTime($lastDay))->diffInDays((new DateTime($today))));
        dd((new Carbon('last day of last month'))->format('Y-m-d'));*/
});
