<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;

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
    return view('home');
});



Route::get('/pelanggan-form', [PelangganController::class, 'create'])->name('tambah.pelanggan');
Route::post('/simpan-pelanggan', [PelangganController::class, 'store'])->name('simpan.pelanggan');
Route::get('/get-gerobak/{id}', [PelangganController::class, 'getGerobak'])->name('get.gerobak');


// Select 2
Route::get('jenisMinuman',[PelangganController::class, 'merk'])->name('minuman.index');
Route::get('jenisGerobak/{id}',[PelangganController::class, 'type']);
