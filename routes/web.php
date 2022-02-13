<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\LamaranController;
use App\Http\Controllers\user\LokasiController;
use App\Http\Controllers\user\ServiceController;
use App\Http\Controllers\admin\GajiController;
use App\Http\Controllers\admin\PegawaiController;
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
    return view('layouts.master-user');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//user
Route::get('/lamaran', [LamaranController::class, 'index']);
Route::get('/lokasi-cabang', [LokasiController::class, 'index']);
Route::get('/service', [ServiceController::class, 'index']);
//admin
Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function () {
    Route::get('/gaji', [GajiController::class, 'index']);
    Route::get('/pegawai', [PegawaiController::class, 'index']);
});
