<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\SuratKematianController;
use App\Http\Controllers\PerhitunganBansosController;
use App\Filament\Resources\SuratResource\Pages\ViewSurat;

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


Route::get('/clear-cache', function () {
    // Clear application cache
    Artisan::call('cache:clear');

    // Clear route cache
    Artisan::call('route:clear');

    // Clear view cache
    Artisan::call('view:clear');

    // Clear config cache
    Artisan::call('config:clear');

    // Clear compiled class cache
    Artisan::call('clear-compiled');

    // Optionally you can clear the optimized class loader cache
    Artisan::call('optimize:clear');

    return 'All caches cleared successfully';
});

Route::get('/symlink', function() {
    Artisan::call('storage:link');
    return 'Symlink created successfully';
});
