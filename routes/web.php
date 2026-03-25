<?php

use App\Http\Controllers\ChirpController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ChirpController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/quotes', [QuoteController::class, 'index']);