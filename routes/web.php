<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AssistsController;

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
    return view('frontend.landing.index');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
});



/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');

    Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('user.profile');
    Route::post('/profile', [App\Http\Controllers\ProfileController::class, 'store'])->name('user.profile.store');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {

    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
    Route::get('/profileAffiliate', [App\Http\Controllers\ProfileController::class, 'indexAfiliate'])->name('affiliate.user.profile');
    Route::post('/profile', [App\Http\Controllers\ProfileController::class, 'store'])->name('user.profile.store');

    Route::get('/asistencias', [AssistsController::class, 'index'])->name('affiliate.asistencia.index');
    Route::post('store', [AssistsController::class, 'store'])->name('affiliate.asistencia.store');
    Route::resource('assists', AssistsController::class);


});
