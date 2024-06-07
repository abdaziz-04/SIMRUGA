<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\SuratKematianController;
use App\Http\Controllers\PerhitunganBansosController;
use App\Filament\Resources\SuratResource\Pages\ViewSurat;
use App\Http\Controllers\PengumumanController;

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
// Route::get('/',[PengumumanController::class,'index']);
Route::get('/pengumuman/{id}', [PengumumanController::class,'show'])->name('pengumuman');



