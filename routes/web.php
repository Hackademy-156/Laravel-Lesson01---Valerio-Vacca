<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\StudentController;

Route::get('/', [PublicController::class, 'homepage'] )->name('homepage');

Route::get('/chi-siamo', [StudentController::class, 'students'])->name('chiSiamo');

Route::get('/dove-andiamo', [PublicController::class, 'doveAndiamo'])->name('doveAndiamo');

// rotta parametrica
Route::get('/chi-siamo/dettaglio/{id}', [StudentController::class, 'detailStudent'])->name('dettaglioStudente');