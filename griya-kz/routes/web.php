<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DoktorController;
use App\Http\Controllers\RekamController;
use Illuminate\Support\Facades\Route;

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

Route::get('/errors', function () {
    return view('component.errors');
});

Route::get('/coba', function () {
    return view('pages.ujicoba');
});


// ***********************AUTH******************************
Route::get('/', [AuthController::class, 'index'])->middleware('isUser');
Route::post('/', [AuthController::class, 'login'])->middleware('isUser');
Route::get('/logout', [AuthController::class, 'logout']);


// *****************Admin**********************************
Route::get('/admin', [AdminController::class, 'index'])->middleware('isLogin', 'AdminRole');
Route::get('/admin/data-pasien', [AdminController::class, 'data_pasien'])->middleware('isLogin', 'AdminRole');
Route::get('/admin/tambah-pasien', [AdminController::class, 'tambah_pasien']);
Route::post('/admin/tambah-pasien', [AdminController::class, 'add_pasien']);
Route::get('/admin/rekam-medis/{id}', [RekamController::class, 'rekam_medis'])->name('rekam-medis');

Route::get('/admin/tambah-rekam/{id}', [RekamController::class, 'tambah_rekam']);
Route::post('/admin/tambah-rekam', [RekamController::class, 'add_rekam']);

//*****************Dokter********************************** */
Route::get('/dokter', [DoktorController::class, 'index'])->middleware('isLogin', 'DokterRole');
