<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PeminjamanController;

Route::resource('buku', BukuController::class);
Route::resource('anggota', AnggotaController::class);
Route::resource('peminjaman', PeminjamanController::class);
