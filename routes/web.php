<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PerdaController;
use App\Http\Controllers\PergubController;
use App\Http\Controllers\PelanggarController;
use App\Http\Controllers\PelaporanController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\NewsController;

//LANDING
Route::get('/', [LandingController::class, 'index']);
Route::get('/perda', [LandingController::class, 'perda']);
Route::get('/pergub', [LandingController::class, 'pergub']);
Route::get('/berita', [LandingController::class, 'berita']);
Route::get('/pelaporan', [LandingController::class, 'pelaporan']);
Route::get('/tentang', [LandingController::class, 'tentang']);
Route::get('/berita/{slug}', [LandingController::class, 'news_show']);

//LOGIN-LOGOUT
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//DASHBOARD

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard']);
    Route::resource('dashboard/perda', PerdaController::class);
    Route::resource('dashboard/pergub', PergubController::class);
    Route::resource('dashboard/pelanggar', PelanggarController::class);
    Route::resource('dashboard/pelaporan', PelaporanController::class);
    Route::resource('dashboard/struktur', StrukturController::class);
    Route::resource('dashboard/berita', NewsController::class);
    Route::post('dashboard/perda/import', [PerdaController::class, 'importExcel'])->name('perda.import');
    Route::post('dashboard/pergub/import', [PergubController::class, 'importExcel'])->name('pergub.import');
});
