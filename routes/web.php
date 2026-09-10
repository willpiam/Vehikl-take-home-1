<?php

use App\Http\Controllers\OilChangeCheckController;
use Illuminate\Support\Facades\Route;

Route::get('/', [OilChangeCheckController::class, 'create'])->name('home');
Route::post('/check', [OilChangeCheckController::class, 'store'])->name('check');
Route::get('/result/{id}', [OilChangeCheckController::class, 'show'])->name('result');
