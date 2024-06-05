<?php

namespace App\Filament\Widgets;

use App\Models\Jadwal;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget\Card;
use App\Models\Pengumuman; // Pastikan model Warga ada

class CardPengumumanOverview extends BaseWidget
{
    protected function getCards(): array
    {
        // Menghitung jumlah warga
        $jumlahPertemuan = Jadwal::count();

        return [
            Card::make('Jadwal Pertemuan', $jumlahPertemuan)
                ->url('admin/jadwals')
                ->color('primary')
                ->icon('heroicon-o-megaphone')
                ->extraAttributes(['class' => 'hover-shadow']),
        ];
    }
}
