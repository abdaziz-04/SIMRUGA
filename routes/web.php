<?php

use Illuminate\Support\Facades\Route;
use App\Filament\Resources\SuratResource\Pages\ViewSurat;
use App\Http\Controllers\SuratKematianController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PerhitunganBansosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LandingController::class, 'index']);

// Hitung bansos
Route::get('/admin/perhitungan-bansos', [PerhitunganBansosController::class, 'index'])->name('perhitungan-bansos.index');
Route::post('/admin/perhitungan-bansos/calculate', [PerhitunganBansosController::class, 'calculate'])->name('perhitungan-bansos.calculate');

Route::get('kematian/download/pdf/{record}', [SuratKematianController::class, 'downloadPdf'])->name('download.pdf');
