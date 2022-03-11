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
use App\Http\Controllers\TreatmentController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\CustomRecipeController;
use App\Http\Controllers\CategoryProductsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HistoryUserController;
use App\Http\Controllers\CustomUserPlanController;
use App\Http\Controllers\ProductsUserPanelController;
use App\Http\Controllers\FactController;
use App\Http\Controllers\RecommendationController;
use App\Http\Controllers\ResetPasswordPanelController;
use App\Http\Controllers\ResetPasswordAdminController;

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

Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    
    Route::resource('patients', UserDetailsController::class); 
    Route::resource('background', BackgroundController::class);  

    Route::group(['prefix' => 'history'], function () {
        Route::get('/pathologic/{user_id}/{type}', [BackgroundHistoryController::class, 'createPathologicHistory'])->name('pathologic');
        Route::get('/pathologic/editPathologic/{id}/{profile_id}', [BackgroundHistoryController::class, 'editPathologic'])->name('edit-pathologic');;
        
        Route::get('/hereditary-family-history/{user_id}/{type}', [BackgroundHistoryController::class, 'createHereditaryFamilyHistory'])->name('hereditary-family-history');
        Route::post('/store-hereditary-family-history', [BackgroundHistoryController::class, 'storeHereditaryFamilyHistory'])->name('history.store-hereditary-family-history');
        Route::get('/editHereditary/{id}/{profile_id}', [BackgroundHistoryController::class, 'editHereditary'])->name('edit-hereditary');
        Route::post('/updateHereditary/{id}', [BackgroundHistoryController::class, 'updateHereditary'])->name('update-hereditary');
        Route::get('/deleteHereditary/{id}', [BackgroundHistoryController::class, 'deleteHereditary'])->name('delete-hereditary');

        Route::get('/no-pathologic/{user_id}/{type}', [BackgroundHistoryController::class, 'createNoPathologicHistory'])->name('no-pathologic');
        Route::get('/pathologic/editNoPathologic/{id}/{profile_id}', [BackgroundHistoryController::class, 'editNoPathologic'])->name('edit-no-pathologic');

        Route::post('/pathologic/updateBackground/{id}', [BackgroundHistoryController::class, 'updateBackground'])->name('update-background');
        Route::get('/deleteBackground/{id}', [BackgroundHistoryController::class, 'deleteBackground'])->name('delete-background');
    });
    Route::resource('history', BackgroundHistoryController::class);

    Route::group(['prefix' => 'medicines'], function () {
        Route::get('/create/{user_id}/{type}', [MedicineController::class, 'create'])->name('medicine');
        Route::get('/edit/{id}/{profile_id}', [MedicineController::class, 'edit'])->name('edit-medicine');
        Route::get('/deleteMedicine/{id}', [MedicineController::class, 'deleteMedicine'])->name('delete-medicine');
    });
    Route::resource('medicines', MedicineController::class);

    Route::group(['prefix' => 'gynecological-history'], function () {
        Route::get('/create/{user_id}/{type}', [GynecologicalHistoryController::class, 'create'])->name('gynecological-history');
        Route::get('/edit/{id}/{profile_id}', [GynecologicalHistoryController::class, 'edit'])->name('edit-gynecological');
    });
    Route::resource('gynecological-history', GynecologicalHistoryController::class);

    Route::group(['prefix' => 'goals'], function () {
        Route::get('/create/{user_id}/{type}', [GoalsController::class, 'create'])->name('goals');
        Route::get('/edit/{id}/{profile_id}', [GoalsController::class, 'edit'])->name('edit-goal');
    });
    Route::resource('goals', GoalsController::class);

    Route::group(['prefix' => 'anthropometric'], function () {
        Route::get('/create/{user_id}/{type}', [AnthropometricController::class, 'create'])->name('anthropometric');
        Route::get('/edit/{id}/{profile_id}', [AnthropometricController::class, 'edit'])->name('edit-anthropometric');
        Route::get('/deleteAnthropometric/{id}', [AnthropometricController::class, 'deleteAnthropometric'])->name('delete-anthropometric');
    });
    Route::resource('anthropometric', AnthropometricController::class);

    Route::group(['prefix' => 'profile'], function () {
        Route::get('/delete-user/{id}', [AdminPatientProfileController::class, 'deleteUser'])->name('delete-user');
    });
    Route::resource('profile', AdminPatientProfileController::class);

    Route::get('gallery/{user_id}', [DropzoneController::class, 'gallery'])->name('gallery');
    Route::post('gallery/store/{user_id}', [DropzoneController::class, 'galleryStore'])->name('gallery.store');

    Route::get('pdf/{user_id}', [DropzoneController::class, 'pdf'])->name('pdf');
    Route::post('pdf/store/{user_id}', [DropzoneController::class, 'pdfStore'])->name('pdf.store');
    Route::get('/pdf/delete/{id}', [DropzoneController::class, 'deletePdf'])->name('delete-pdf');

    Route::group(['prefix' => 'treatment'], function () {
        Route::get('/create/{user_id}/{type}', [TreatmentController::class, 'create'])->name('treatment');
        Route::get('/edit/{id}/{profile_id}', [TreatmentController::class, 'edit'])->name('edit-treatment');
    });
    Route::resource('treatment', TreatmentController::class);

    Route::group(['prefix' => 'agenda'], function () {
        Route::get('/create/{user_id}', [AgendaController::class, 'create'])->name('agenda');
    });
    Route::resource('agenda', AgendaController::class);

    Route::group(['prefix' => 'custom-recipes'], function () {
        Route::get('/create/{user_id}/{type}', [CustomRecipeController::class, 'create'])->name('create-custom-recipes');
        Route::get('/edit/{id}', [CustomRecipeController::class, 'edit'])->name('edit-custom-recipes');
        Route::get('/delete-custom-recipe/{id}', [CustomRecipeController::class, 'deleteCustomRecipe'])->name('delete-custom-recipes');
    });
    Route::resource('custom-recipes', CustomRecipeController::class);

    Route::group(['prefix' => 'recipes'], function () {
        Route::get('/delete-recipe/{id}', [RecipeController::class, 'deleteRecipe'])->name('delete-recipe');
    });
    Route::resource('recipes', RecipeController::class);

    Route::group(['prefix' => 'category-products'], function () {
        Route::get('/delete-category-product/{id}', [CategoryProductsController::class, 'deleteCategoryProduct'])->name('delete-category-product');
    });
    Route::resource('category-products', CategoryProductsController::class);

    Route::group(['prefix' => 'products'], function () {
        Route::get('/delete-product/{id}', [ProductController::class, 'deleteProduct'])->name('delete-product');
    });
    Route::resource('products', ProductController::class);

    Route::resource('facts', FactController::class);

    Route::group(['prefix' => 'recommendation'], function () {
        Route::get('/create/{user_id}/{type}', [RecommendationController::class, 'create'])->name('recommendation');
        Route::get('/edit/{id}/{profile_id}', [RecommendationController::class, 'edit'])->name('edit-recommendation');
    });
    Route::resource('recommendation', RecommendationController::class);

    Route::get('/random-user-password/{id}', [ResetPasswordAdminController::class, 'randomUserPassword'])->name('random-user-password');

    Route::get('/reset-admin-password', [ResetPasswordAdminController::class, 'resetAdminPasswordForm'])->name('reset-admin-password');
    Route::put('/update-admin-password', [ResetPasswordAdminController::class, 'resetAdminPassword'])->name('update-admin-password');
});

Route::group(['middleware' => ['auth', 'patient'], 'prefix' => 'patient'], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/history', [HistoryUserController::class, 'index'])->name('history');
    Route::get('/plan', [CustomUserPlanController::class, 'index'])->name('custom-plan');
    Route::get('/recipe/{id}', [CustomUserPlanController::class, 'show'])->name('custom-plan.show');

    Route::get('/products', [ProductsUserPanelController::class, 'index'])->name('products');
    Route::get('/products/{category_id}', [ProductsUserPanelController::class, 'showCategoryProducts'])->name('category.products');
    Route::get('/product/{id}', [ProductsUserPanelController::class, 'show'])->name('product.show');

    Route::get('/reset-password', [ResetPasswordPanelController::class, 'index'])->name('reset-password');
    Route::put('/update-password', [ResetPasswordPanelController::class, 'updatePassword'])->name('update-password');
});