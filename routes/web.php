<?php

use Illuminate\Support\Facades\Route;
use App\Filament\Resources\SuratResource\Pages\ViewSurat;
use App\Http\Controllers\SuratKematianController;
use App\Http\Controllers\LandingController;

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

Route::get('kematian/download/pdf/{record}', [SuratKematianController::class, 'downloadPdf'])->name('download.pdf');
