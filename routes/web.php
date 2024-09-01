<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

Route::get('/', [LandingController::class, 'index']);
Route::get('/perda', [LandingController::class, 'perda']);
Route::get('/pergub', [LandingController::class, 'pergub']);
Route::get('/berita', [LandingController::class, 'berita']);
Route::get('/pelaporan', [LandingController::class, 'pelaporan']);
Route::get('/tentang', [LandingController::class, 'tentang']);
