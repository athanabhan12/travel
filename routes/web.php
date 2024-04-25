<?php

use App\Http\Controllers\PelangganController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PanitiaController;
use App\Http\Controllers\DaftarHadirController;
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

// Route::get('/', function () {
//     return view('dashboard');
// });

Route::get('/',                                   [DashboardController::class,'index'])->name('dashboard');
Route::get('/dashboard',                          [DashboardController::class,'index'])->name('dashboard');
Route::get('/pelanggan',                          [PelangganController::class,'index'])->name('pelanggan');
Route::get('/pelanggan',                          [PelangganController::class,'index'])->name('pelanggan');
Route::get('/tour',                               [TourController::class,'index'])->name('tour');
Route::get('/registrasi',                         [RegistrasiController::class,'index'])->name('registrasi');
Route::get('/registrasi/scan/{id}',               [RegistrasiController::class,'scan']);
Route::get('/panitia',                            [PanitiaController::class,'index'])->name('panitia');
Route::get('/daftar_hadir',                       [DaftarHadirController::class,'index'])->name('daftar_hadir');

Route::get('/pelanggan/create',                   [PelangganController::class,'create']);
Route::post('/pelanggan/store',                   [PelangganController::class,'store']);
Route::get('/pelanggan/edit/{id}',                [PelangganController::class,'edit']);
Route::post('/pelanggan/update/{id}',             [PelangganController::class,'updateb']);
Route::get('/pelanggan/delete/{id}',              [PelangganController::class,'delete']);
Route::get('/pelanggan/detail/{id}',              [PelangganController::class,'detail']);
Route::post('/pelanggan/import',                  [PelangganController::class,'import'])->name('import');
Route::get('/pelanggan/pdf',                      [PelangganController::class,'pdf']);

Route::get('/panitia/create',                     [PanitiaController::class,'create']);
Route::post('/panitia/store',                     [PanitiaController::class,'store']);
Route::get('/panitia/edit/{id}',                  [PanitiaController::class,'edit']);
Route::post('/panitia/update/{id}',               [PanitiaController::class,'update']);
Route::get('/panitia/delete/{id}',                [PanitiaController::class,'delete']);
Route::get('/panitia/ubah_password/{id}',         [PanitiaController::class,'ubah_password']);
Route::post('/panitia/update_password/{id}',       [PanitiaController::class,'update_password']);

Route::get('/tour/create',                        [TourController::class,'create']);
Route::post('/tour/store',                        [TourController::class,'store']);
Route::get('/tour/edit/{id}',                     [TourController::class,'edit']);
Route::post('/tour/update/{id}',                  [TourController::class,'update']);
Route::get('/tour/delete/{id}',                   [TourController::class,'delete']);
Route::get('/tour/detail/{id}',                   [TourController::class,'detail']);
