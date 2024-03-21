<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DoktorController;
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


Route::get('/', [AuthController::class, 'index'])->middleware('isUser');
Route::post('/', [AuthController::class, 'login'])->middleware('isUser');
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/admin', [AdminController::class, 'index'])->middleware('isLogin', 'AdminRole');
Route::get('/dokter', [DoktorController::class, 'index'])->middleware('isLogin', 'DokterRole');
