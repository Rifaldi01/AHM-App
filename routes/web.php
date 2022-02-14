<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\JabatanController;
use App\Http\Controllers\user\LamaranController;
use App\Http\Controllers\user\LokasiController;
use App\Http\Controllers\user\ServiceController;
use App\Http\Controllers\admin\GajiController;
use App\Http\Controllers\admin\PegawaiController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Auth;

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
Route::get('/logout', function () {
    Auth::logout();
    return redirect('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//user
Route::get('/lamaran', [LamaranController::class, 'index']);
Route::post('lamaran/store', [LamaranController::class, 'store'])->name('store-lamaran');
Route::get('/lokasi-cabang', [LokasiController::class, 'index']);
Route::get('/service', [ServiceController::class, 'index']);
//admin
Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function () {

    // Route dashboard
    Route::get('dashboard', [DashboardController::class, 'index']);


    // Route pegawai
    Route::get('pegawai', [PegawaiController::class, 'index'])->name('daftar-pegawai');
    Route::post('pegawai/store', [PegawaiController::class, 'store'])->name('store-pegawai');
    Route::get('pegawai/edit/{id}', [PegawaiController::class, 'edit'])->name('edit-pegawai');
    Route::post('pegawai/update/{id}', [PegawaiController::class, 'update'])->name('update-pegawai');
    Route::get('pegawai/delete/{id}', [PegawaiController::class, 'destroy'])->name('delete-pegawai');


    // Route Jabatan
    Route::get('jabatan', [JabatanController::class, 'index'])->name('daffar-jabatan');
    Route::post('jabatan/store', [JabatanController::class, 'store'])->name('store-jabatan');
    Route::get('jabatan/edit/{id}', [JabatanController::class, 'edit'])->name('edit-jabatan');
    Route::post('jabatan/update/{id}', [JabatanController::class, 'update'])->name('update-jabatan');
    Route::get('jabatan/delete/{id}', [JabatanController::class, 'destroy'])->name('delete-jabatan');

    // Route Gaji
    Route::get('gaji', [GajiController::class, 'index'])->name('daftar-gaji');
    Route::post('gaji/store', [GajiController::class, 'store'])->name('store-gaji');
    Route::get('gaji/edit/{id}', [GajiController::class, 'edit'])->name('edit-gaji');
    Route::get('gaji/update/{id}', [GajiController::class, 'update'])->name('update-gaji');
    Route::get('gaji/delete/{id}', [GajiController::class, 'destroy'])->name('delete-jabatan');

    // Route Gaji
    Route::get('lamaran', [LamaranController::class, 'show'])->name('daftar-lamaran');
    Route::get('lamaran/terima/{id}', [LamaranController::class, 'approve'])->name('terima-lamaran');
    Route::get('lamaran/edit/{id}', [LamaranController::class, 'edit'])->name('edit-lamaran');
    Route::get('lamaran/update/{id}', [LamaranController::class, 'update'])->name('update-lamaran');
    Route::get('lamaran/delete/{id}', [LamaranController::class, 'destroy'])->name('delete-lamaran');
});
