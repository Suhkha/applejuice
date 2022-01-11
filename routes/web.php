<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserDetailsController;
use App\Http\Controllers\BackgroundController;
use App\Http\Controllers\BackgroundHistoryController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\GynecologicalHistoryController;
use App\Http\Controllers\GoalsController;
use App\Http\Controllers\AnthropometricController;
use App\Http\Controllers\AdminPatientProfileController;
use App\Http\Controllers\DropzoneController;

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

    Route::group(['prefix' => 'goals'], function () {
        Route::get('/create/{user_id}', [GoalsController::class, 'create'])->name('goals');
    });
    Route::resource('goals', GoalsController::class);

    Route::group(['prefix' => 'anthropometric'], function () {
        Route::get('/create/{user_id}', [AnthropometricController::class, 'create'])->name('anthropometric');
    });
    Route::resource('anthropometric', AnthropometricController::class);

    Route::resource('profile', AdminPatientProfileController::class);

    Route::get('gallery/{user_id}', [DropzoneController::class, 'dropzone'])->name('gallery');
    Route::post('gallery/store/{user_id}', [DropzoneController::class, 'dropzoneStore'])->name('dropzone.store');

    
});
