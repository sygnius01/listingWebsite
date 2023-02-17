<?php

use App\Http\Controllers\PlanController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');


Route::group(['prefix' => 'admin','middleware' => ['auth']],function () {

     Route::prefix('plans')->name('plans.')->group(function () {
        Route::get('/list',function(){echo 'list';})->name('list');
        Route::view('/create', 'plans.create')->name('create');
        Route::get('/child/levels', [GeoMasterController::class, 'childLevels'])->name('child.levels');
        Route::post('/store', [GeoMasterController::class, 'store'])->name('store');
        Route::get('/edit/{geoId}', [GeoMasterController::class, 'edit'])->name('edit');
        Route::post('/update', [GeoMasterController::class, 'update'])->name('update');
        Route::get('/destory{geoId}', [GeoMasterController::class, 'destory'])->name('destory');
        Route::get('/export', [GeoMasterController::class, 'exportCompanygeodetails'])->name('export');
    });

    });