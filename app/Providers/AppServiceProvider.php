<?php

namespace App\Providers;

use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use App\Models\PembayaranIuran;
use App\Observers\PemasukanObserver;
use App\Observers\PengeluaranObserver;
use App\Observers\PembayaranIuranObserver;
use Illuminate\Support\ServiceProvider;
use BezhanSalleh\FilamentLanguageSwitch\LanguageSwitch;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Pemasukan::observe(PemasukanObserver::class);
        Pengeluaran::observe(PengeluaranObserver::class);
        PembayaranIuran::observe(PembayaranIuranObserver::class);
        LanguageSwitch::configureUsing(function (LanguageSwitch $switch) {
            $switch
                ->locales(['id','en']);
        });
    }
}
