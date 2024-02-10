<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AssistsController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\AporteController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\LandingController;

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

Route::get('/', [LandingController::class, 'index'])->name('backend.landing.index');
Route::get('/contactos', [LandingController::class, 'contactos'])->name('backend.contactos.index');
Route::get('/rutas', [LandingController::class, 'rutas'])->name('backend.rutas.index');



Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
    Route::resource('assists', AssistsController::class);
    Route::resource('report', ReportController::class);
    Route::resource('route', RouteController::class);
    Route::post('/profile', [App\Http\Controllers\ProfileController::class, 'store'])->name('profile.store');

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

    Route::get('/super-admin', [HomeController::class, 'adminHome'])->name('backend.admin.index');

    Route::get('/indexAdmin', [App\Http\Controllers\ProfileController::class, 'indexAdmin'])->name('admin.user.profile');

    Route::get('/asistencias', [AssistsController::class, 'index'])->name('affiliate.asistencia.index');

    Route::get('/generar', [ReportController::class, 'generatePDF'])->name('generar');

    Route::group(['prefix' => 'role'], function () {
        Route::get('/', [RoleController::class, 'index'])->name('backend.role.index');
        Route::get('/create', [RoleController::class, 'create'])->name('backend.role.create');
        Route::get('/show/{id}', [RoleController::class, 'show'])->name('backend.role.show');
        Route::post('store', [RoleController::class, 'store'])->name('backend.role.store');
        Route::get('edit/{id}', [RoleController::class, 'edit'])->name('backend.role.edit');
        Route::post('update', [RoleController::class, 'update'])->name('backend.role.update');
        Route::post('delete', [RoleController::class, 'delete'])->name('backend.role.delete');
    });

    Route::group(['prefix' => 'user'], function () {
        Route::get('/', [UserController::class, 'index'])->name('backend.user.index');
        Route::get('/create', [UserController::class, 'create'])->name('backend.user.create');
        Route::get('/show/{id}', [UserController::class, 'show'])->name('backend.user.show');
        Route::post('store', [UserController::class, 'store'])->name('backend.user.store');
        Route::get('edit/{id}', [UserController::class, 'edit'])->name('backend.user.edit');
        Route::post('update', [UserController::class, 'update'])->name('backend.user.update');
        Route::post('delete', [UserController::class, 'destroy'])->name('backend.user.delete');
    });

    Route::group(['prefix' => 'report'], function () {
        Route::get('/', [ReportController::class, 'index'])->name('backend.report.index');
        Route::get('/create', [ReportController::class, 'create'])->name('backend.report.create');
        Route::get('/show/{id}', [ReportController::class, 'show'])->name('backend.report.show');
        Route::post('store', [ReportController::class, 'store'])->name('backend.report.store');
        Route::get('edit/{id}', [ReportController::class, 'edit'])->name('backend.report.edit');
        Route::post('update', [ReportController::class, 'update'])->name('backend.report.update');
        Route::post('delete', [ReportController::class, 'destroy'])->name('backend.report.delete');
    });

    Route::group(['prefix' => 'route'], function () {
        Route::get('/', [RouteController::class, 'index'])->name('backend.route.index');
        Route::get('/create', [RouteController::class, 'create'])->name('backend.route.create');
        Route::get('/show/{id}', [RouteController::class, 'show'])->name('backend.route.show');
        Route::post('store', [RouteController::class, 'store'])->name('backend.route.store');
        Route::get('edit/{id}', [RouteController::class, 'edit'])->name('backend.route.edit');
        Route::post('update', [RouteController::class, 'update'])->name('backend.route.update');
        Route::post('delete', [RouteController::class, 'destroy'])->name('backend.route.delete');
    });

    Route::group(['prefix' => 'aporte'], function () {
        Route::get('/', [AporteController::class, 'index'])->name('backend.aporte.index');
        Route::get('/create', [AporteController::class, 'create'])->name('backend.aporte.create');
        Route::get('/show/{id}', [AporteController::class, 'show'])->name('backend.aporte.show');
        Route::post('store', [AporteController::class, 'store'])->name('backend.aporte.store');
        Route::get('edit/{id}', [AporteController::class, 'edit'])->name('backend.aporte.edit');
        Route::post('update', [AporteController::class, 'update'])->name('backend.aporte.update');
        Route::post('delete', [AporteController::class, 'destroy'])->name('backend.aporte.delete');
    });


    Route::group(['prefix' => 'cargo'], function () {
        Route::get('/', [CargoController::class, 'index'])->name('backend.cargo.index');
        Route::get('/create', [CargoController::class, 'create'])->name('backend.cargo.create');
        Route::post('store', [CargoController::class, 'store'])->name('backend.cargo.store');
        Route::delete('delete/{id}', [CargoController::class, 'destroy'])->name('backend.cargo.delete');
    });



    Route::get('/assist', [AssistsController::class, 'verAssists'])->name('backend.assist.index');


});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {

    Route::get('/afiliado', [HomeController::class, 'managerHome'])->name('manager.home');
    Route::get('/profileAffiliate', [App\Http\Controllers\ProfileController::class, 'indexAfiliate'])->name('affiliate.user.profile');

    Route::get('/asistencias', [AssistsController::class, 'index'])->name('affiliate.asistencia.index');
    Route::post('store', [AssistsController::class, 'store'])->name('affiliate.asistencia.store');
});
