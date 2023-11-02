<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\EventController;

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

Route::get('login', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout']);


Route::middleware("auth:admin")->group(
    function () {
        Route::get('search/event', [EventController::class, 'filterEventStatus'])->name('admin.event.search');
        Route::resource("event", "EventController");
        Route::get('dashboard', [EventController::class, 'index'])->name('dashboard');
        Route::post("ckeditor/image/upload", [EventController::class, 'uploadCKImage'])->name("ckeditor.upload.image");
    }
);

Route::get('/', function () {
    return view('admin.page')->name('dashboard');
});

Route::get('/{any}', function () {
    return view('comingsoon');
});
