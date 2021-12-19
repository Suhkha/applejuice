<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserDetailsController;
use App\Http\Controllers\BackgroundController;
use App\Http\Controllers\BackgroundHistoryController;

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
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
    Route::resource('patients', UserDetailsController::class); 
    Route::resource('background', BackgroundController::class);  

    Route::group(['prefix' => 'history'], function () {
        Route::get('/pathologic/{user_id}', [BackgroundHistoryController::class, 'createPathologicHistory'])->name('pathologic');
        Route::get('/no-pathologic', [BackgroundHistoryController::class, 'createNoPathologicHistory'])->name('no-pathologic');
    });

    Route::resource('history', BackgroundHistoryController::class);
});
