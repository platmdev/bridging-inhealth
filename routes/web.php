<?php

use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PesertaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutingController;

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

require __DIR__ . '/auth.php';

Route::group(['prefix' => '/', 'middleware' => 'auth'], function () {
    Route::get('/', fn()=>view('index'))->name('home');

    Route::group(['prefix'=>'/peserta', 'middleware' => 'cors'], function(){
        Route::get('/eligibilitas',  [PesertaController::class, 'eligibilitas'])->name('eligibilitas');
        Route::post('/eligibilitas',  [PesertaController::class, 'cekEligibilitas'])->name('submitEligibilitas');
        Route::get('/daftar-peserta', [PesertaController::class, 'peserta'])->name('daftar-peserta');
    });

    Route::group(['prefix'=>'/laporan'], function(){
        Route::get('/rekap-poli', [LaporanController::class, 'rekapPoli'])->name('laporan.rekap-poli');
    });
});


