<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserDetailsController;
use App\Http\Controllers\BackgroundController;
use App\Http\Controllers\BackgroundHistoryController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\GynecologicalHistoryController;


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
        
        Route::get('/hereditary-family-history/{user_id}', [BackgroundHistoryController::class, 'createHereditaryFamilyHistory'])->name('hereditary-family-history');
        Route::post('/store-hereditary-family-history', [BackgroundHistoryController::class, 'storeHereditaryFamilyHistory'])->name('history.store-hereditary-family-history');

        Route::get('/no-pathologic/{user_id}', [BackgroundHistoryController::class, 'createNoPathologicHistory'])->name('no-pathologic');
    });
    Route::resource('history', BackgroundHistoryController::class);

    Route::group(['prefix' => 'medicines'], function () {
        Route::get('/create/{user_id}', [MedicineController::class, 'create'])->name('medicine');
    });
    Route::resource('medicines', MedicineController::class);

    Route::group(['prefix' => 'gynecological-history'], function () {
        Route::get('/create/{user_id}', [GynecologicalHistoryController::class, 'create'])->name('gynecological-history');
    });
    Route::resource('gynecological-history', GynecologicalHistoryController::class);
});
