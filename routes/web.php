<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\SuratKematianController;
use App\Http\Controllers\PerhitunganBansosController;
use App\Filament\Resources\SuratResource\Pages\ViewSurat;
use Illuminate\Support\Facades\Artisan;

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
Route::get('/pengumuman/{id}', [PengumumanController::class, 'show'])->name('pengumuman');

Route::get('/migrate-fresh', function () {
    Artisan::call('migrate:fresh');
    return 'Database migrated fresh!';
})->middleware('auth', 'admin');

Route::get('/db-seed', function () {
    Artisan::call('db:seed');
    return 'Database seeded!';
})->middleware('auth', 'admin');

Route::get('/cache-clear', function () {
    Artisan::call('cache:clear');
    return 'Cache cleared!';
})->middleware('auth', 'admin');

Route::get('/config-clear', function () {
    Artisan::call('config:clear');
    return 'Config cache cleared!';
})->middleware('auth', 'admin');

Route::get('/route-clear', function () {
    Artisan::call('route:clear');
    return 'Route cache cleared!';
})->middleware('auth', 'admin');

Route::get('/view-clear', function () {
    Artisan::call('view:clear');
    return 'View cache cleared!';
})->middleware('auth', 'admin');
