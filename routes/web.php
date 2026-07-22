<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UtsController;
use App\Http\Controllers\UasController;

Route::get('/', [DashboardController::class, 'index']);

Route::prefix('uts')->group(function () {

    Route::get('/', [UtsController::class, 'index']);
    Route::get('/produk', [UtsController::class, 'produk']);
    Route::get('/profil', [UtsController::class, 'profil']);
    Route::get('/pemesanan', [UtsController::class, 'pemesanan']);
        Route::post('/pemesanan', [UtsController::class, 'simpan']);
    Route::get('/data', [UtsController::class, 'data']);
    
    Route::get('/edit/{id}', [UtsController::class, 'edit']);
    Route::post('/update/{id}', [UtsController::class, 'update']);
    Route::get('/hapus/{id}', [UtsController::class, 'hapus']);
});

Route::prefix('uas')->group(function () {

    Route::get('/', [UasController::class, 'index']);

    Route::get('/data', [UasController::class, 'data']);

    Route::get('/tambah', [UasController::class, 'tambah']);

    Route::post('/simpan', [UasController::class, 'simpan']);

    Route::get('/edit/{id}', [UasController::class, 'edit']);

    Route::post('/update/{id}', [UasController::class, 'update']);

    Route::get('/hapus/{id}', [UasController::class, 'hapus']);

});
