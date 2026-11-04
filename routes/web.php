<?php

use App\Http\Controllers\PenilaianController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/penilaian', [PenilaianController::class, 'index'])->name('penilaian');
