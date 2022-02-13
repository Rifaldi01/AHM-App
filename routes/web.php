<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\LamaranController;
use App\Http\Controllers\user\LokasiController;
use App\Http\Controllers\user\ServiceController;
use App\Http\Controllers\admin\GajiController;
use App\Http\Controllers\admin\PegawaiController;
use App\Http\Controllers\Admin\DashboardController;
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

    // Route dashboard
    Route::get('dashboard',[DashboardController::class,'index']);


    // Route pegawai
    Route::get('pegawai',[PegawaiController::class,'index'])->name('daftar-pegawai');
    Route::post('pegawai/store',[PegawaiController::class,'store'])->name('store-pegawai');
    Route::get('pegawai/edit/{id}',[PegawaiController::class,'edit'])->name('edit-pegawai');
    Route::post('pegawai/update/{id}',[PegawaiController::class,'update'])->name('update-pegawai');
    Route::get('pegawai/delete/{id}',[PegawaiController::class,'destroy'])->name('delete-pegawai');
});
