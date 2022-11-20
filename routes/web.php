<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\PesertaController;

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

// Tabel pegawai
Route::get('/pegawai', [PegawaiController::class, 'index']);                // View
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);        // Create
Route::post('/pegawai/store',[PegawaiController::class, 'store']);          // Menyimpan data create
Route::get('/pegawai/hapus/{id}',[PegawaiController::class, 'hapus']);      // Menghapus salah 1 data 

// Tabel meeting
Route::get('/meeting', [MeetingController::class, 'index']);                // View
Route::get('/meeting/tambah', [MeetingController::class, 'tambah']);        // Create
Route::post('/meeting/store',[MeetingController::class, 'store']);          // Menyimpan data create

// Tabel ruangan
Route::get('/ruangan', [RuanganController::class, 'index']);                // View
Route::get('/ruangan/tambah', [RuanganController::class, 'tambah']);        // Create
Route::post('/ruangan/store',[RuanganController::class, 'store']);          // Menyimpan data create
Route::get('/ruangan/hapus/{id}',[RuanganController::class, 'hapus']);      // Menghapus salah 1 data 

// Tabel peserta_rapat
Route::get('/peserta', [PesertaController::class, 'index']);    // View