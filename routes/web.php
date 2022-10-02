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
    return view('auth.login');
});

Auth::routes();

//Dashboard route
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//My Resume route
Route::resource('resumes', 'App\Http\Controllers\ResumeController');

//Public resume route
Route::get('/resume/{user}', [App\Http\Controllers\ResumeController::class, 'publicUrl']);
