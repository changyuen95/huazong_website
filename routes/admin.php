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

// Route::middleware(["guest:admin"])->group(function () {
//     Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
//     Route::post('login', 'Auth\LoginController@login');

// });
Route::resource("event", "EventController");
Route::get('dashboard','EventController@index')->name('dashboard');
Route::post("ckeditor/image/upload", "EventController@uploadCKImage")->name("ckeditor.upload.image");

Route::get('/', function () {
    return view('admin.page')->name('dashboard');
});

Route::get('/{any}', function () {
    return view('comingsoon');
});