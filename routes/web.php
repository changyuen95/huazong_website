<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/info', function () {
    return view('huazong.info');
});
Route::get('recent-activity', function(){
    return view('recent_activity');
});

Route::get('event-detail', function(){
    return view('event_detail');
});

Route::get('/{any}', function () {
    return view('comingsoon');
});
