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
Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('isLogin', 'AdminRole');
Route::get('/admin/data-pasien', [AdminController::class, 'data_pasien'])->name('data-pasien')->middleware('isLogin', 'AdminRole');
Route::get('/admin/tambah-pasien', [AdminController::class, 'tambah_pasien'])->name('tambah-data');
Route::post('/admin/tambah-pasien', [AdminController::class, 'add_pasien']);

Route::post('/admin/delete/{id}', [AdminController::class, 'hapuspendaftaran'])->name('delete-data');


//*****************Dokter********************************** */
Route::get('/dokter', [DoktorController::class, 'index'])->name('dokter')->middleware('isLogin', 'DokterRole');
Route::get('/dokter/priksa', [DoktorController::class, 'priksa_pasien'])->name('data-priksa')->middleware('isLogin', 'DokterRole');

// *****************Rekam Medis**********************************
Route::get('rekam-medis/{pasien_id}', [RekamController::class, 'rekam_medis'])->name('rekam_medis');
Route::get('rekam-medis/{pasien_id}/tambah', [RekamController::class, 'tambah_rekam'])->name('tambah_rekam');
Route::post('rekam-medis/{pasien_id}/add', [RekamController::class, 'add_rekam'])->name('add_rekam');
Route::get('rekam-medis/{pasien_id}/edit', [RekamController::class, 'edit_rekam'])->name('edit_rekam');
Route::post('rekam-medis/{pasien_id}/update-medis', [RekamController::class, 'update_rekam'])->name('update_rekam');
