<?php

use App\Http\Controllers\indexController;
use App\Http\Controllers\jobController;
use Illuminate\Support\Facades\Route;

Route::get('/', [indexController::class, 'index']);

Route::get('/job', [jobController::class, 'index']);

Route::get('/about', [indexController::class, 'about']);

Route::get('/contact', [indexController::class, 'contact']);
