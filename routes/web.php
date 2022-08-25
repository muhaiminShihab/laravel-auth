<?php

use App\Http\Controllers\UserController;
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

// home route
Route::get('/', function () {
    return view('welcome');
});

Route::controller(UserController::class)->group(function () {
    // auth routes
    Route::match(['get', 'post'], '/register', 'register')->name('register');
    Route::match(['get', 'post'], '/login', 'login')->name('login');
    Route::get('/logout', 'logout')->name('logout');

    // dashboard route
    Route::get('/dashboard', 'dashboard')->name('dashboard')->middleware('auth');
});
