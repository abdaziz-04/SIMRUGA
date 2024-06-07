<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\PermintaanLayanan; 
use Illuminate\Support\Facades\Auth;

class CardPermintaanLayananOverview extends BaseWidget
{

    public static function canView(): bool // Fungsi untuk memeriksa hak akses
    {
        return Auth::user()->hasPermissionTo('view_layanan_widget'); // Pastikan Anda memiliki hak akses yang sesuai dengan permissionn
    }

    protected function getCards(): array
    {
        $pendingCount = PermintaanLayanan::where('status', 'pending')->count();
        $prosesCount = PermintaanLayanan::where('status', 'proses')->count();
        $ditolakCount = PermintaanLayanan::where('status', 'ditolak')->count();
        $selesaiCount = PermintaanLayanan::where('status', 'selesai')->count();

        return [
            Card::make('Pending', $pendingCount)
                ->color('warning')
                ->description('Pending')
                ->icon('heroicon-o-clock'),
                
            Card::make('Proses', $prosesCount)
                ->color('primary')
                ->description('Proses')
                ->icon('heroicon-o-arrow-path'),
                
            Card::make('Ditolak', $ditolakCount)
                ->color('danger')
                ->description('Ditolak')
                ->icon('heroicon-o-x-circle'),
                
            Card::make('Selesai', $selesaiCount)
                ->color('success')
                ->description('Selesai')
                ->icon('heroicon-o-check-circle'),
        ];
    }
}
