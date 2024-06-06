<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget\Card;
use App\Models\surat_warga;
use Illuminate\Support\Facades\Auth;

class CardSuratOverview extends BaseWidget
{
    protected static ?string $pollingInterval = '5s';

    public static function canView(): bool // Fungsi untuk memeriksa hak akses
    {
        return Auth::user()->hasPermissionTo('view_surat_widget'); // Pastikan Anda memiliki hak akses yang sesuai dengan permissionn
    }

    protected function getCards(): array
    {

        $jumlahSurat = surat_warga::count();

        return [
            Card::make('Permintaan Surat', $jumlahSurat)
                ->url('admin/surat-wargas')
                ->color('primary')
                ->icon('heroicon-o-envelope')
                ->extraAttributes(['class' => 'hover-shadow']),
        ];
    }
}
