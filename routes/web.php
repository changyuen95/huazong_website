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
})->name('recent_activity');

Route::get('national-thirteen-hall', function(){
    return view('national_thirteen_halls');
});

Route::get('event-detail/202307121423', function(){
    return view('event_detail');
});

Route::get('event-detail/202310081715', function(){
    return view('event4');
});

Route::get('event-detail/202308282211', function(){
    return view('event2');
});

Route::get('event-detail/202303081955', function(){
    return view('event3');
});

Route::get('museum', function(){
    return view('museum');
});

Route::get('team', function(){
    return view('team');
});

Route::get('education-fund', function(){
    return view('education_fund');
});

Route::get('contact_us', function(){
    return view('contact_us');
});

Route::get('huazong-education-fund-charity-golf', function () {
    return view('charity_golf');
});

Route::get('huazong-education-fund-charity-golf-detail', function () {
    return view('charity_golf_detail');
});

Route::get('/{any}', function () {
    return view('comingsoon');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
