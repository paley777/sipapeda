<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AuthController;

//LANDING
Route::get('/', [LandingController::class, 'index']);
Route::get('/perda', [LandingController::class, 'perda']);
Route::get('/pergub', [LandingController::class, 'pergub']);
Route::get('/berita', [LandingController::class, 'berita']);
Route::get('/pelaporan', [LandingController::class, 'pelaporan']);
Route::get('/tentang', [LandingController::class, 'tentang']);

//LOGIN-LOGOUT
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//DASHBOARD
Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth');