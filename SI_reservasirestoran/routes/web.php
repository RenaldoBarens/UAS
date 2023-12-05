<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Restoran\RestoranController;
use App\Http\Controllers\RestoranPelanggan\RestoranPelangganController;
// use App\Http\Controllers\Reservasi\ReservasiController;
use App\Http\Controllers\Reservasi2Controller;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\CetakHistoryController;


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
    return view('index');
});

Route::resource('Restoran/restoran', RestoranController::class);

Route::resource('RestoranPelanggan/restoran-pelanggan', RestoranPelangganController::class);

Route::resource('/Reservasi', Reservasi2Controller::class);

Route::resource('/History', HistoryController::class);

Route::get('/Report', [CetakHistoryController::class,'index']);

Route::get('/Report/Cetak', [CetakHistoryController::class,'cetak_history']);

Route::get('/Finish/{id}', [Reservasi2Controller::class,'history']);

// Route::resource('Reservasi/reservasi', ReservasiController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
