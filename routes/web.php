<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\TanggapanController;
use App\Models\tanggapan;
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


route::get('/',[HomeController::class, 'index'])->name('home');

// Tanggapan

route::get('/petugas/tanggapan',[TanggapanController::class, 'index'])->name('tanggapan.index');

Route::get('/petugas/formtanggapan/{id}',[TanggapanController::class, 'formtanggapan']);
Route::post('/petugas/inserttanggapan',[TanggapanController::class, 'store']);
// End Tanggapan

// Pengaduan
route::get('/petugas/pengaduan',[PengaduanController::class, 'index']);
// End Pengaduan