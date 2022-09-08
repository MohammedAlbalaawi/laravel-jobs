<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\LogingController;
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



Route::get('/dashboard', function () {
    return view('dashboard');
})  ->name('dashboard')
    ->middleware('auth');

Route::controller(LogingController::class)->group(function () {
    Route::get('/', 'index')->name('login.index');
    Route::post('check', 'check')->name('login.check');
    Route::get('logout', 'logout')->name('login.logout');

    Route::get('forgetPassword', 'forgetPassword')->name('login.forgetPassword');
    Route::post('forgetPassword', 'forgetPasswordSend')->name('login.forgetPassword.send');
});

Route::resource('jobs', JobController::class)
    ->parameters(['jobs' => 'model']);
