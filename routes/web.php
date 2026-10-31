<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/tentang', function () {
    return view('tentang');
}) -> name  ("tentang");


Route::get('/deteksi', [App\Http\Controllers\DeteksiController::class, 'index'])
    ->name('deteksi');

Route::post('/hasil-deteksi', [App\Http\Controllers\DeteksiController::class, 'prosesData'])
    ->name('hasil.deteksi');

Route::get('/riwayat', [App\Http\Controllers\DeteksiController::class, 'riwayat'])
    ->name('riwayat');