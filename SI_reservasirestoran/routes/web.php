<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Restoran\RestoranController;
use App\Http\Controllers\RestoranPelanggan\RestoranPelangganController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
