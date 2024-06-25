<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class CardLembagaOverview extends BaseWidget
{
    protected static ?string $pollingInterval = '5s';

    protected function getCards(): array
    {
        // Definisikan data lembaga dalam array
        $lembagas = [
            [
                'nama_lembaga' => 'Polisi',
                'kontak_lembaga' => '+6281137802000',
            ],
            [
                'nama_lembaga' => 'Dinas Pemadam Kebakaran',
                'kontak_lembaga' => '+6281230729499',
            ],
            [
                'nama_lembaga' => 'BPBD',
                'kontak_lembaga' => '+62811377050',
            ],
            [
                'nama_lembaga' => 'Rumah Sakit terdekat',
                'kontak_lembaga' => '+6282142720405',
            ],
        ];

        // Inisialisasi array untuk menyimpan cards
        $cards = [];

        // Loop melalui setiap lembaga untuk membuat card
        foreach ($lembagas as $lembaga) {
            // Membuat pesan WhatsApp yang akan dikirim
            $whatsappMessage = urlencode("Halo, saya ingin melaporkan tentang {$lembaga['nama_lembaga']}.");

            // Membuat URL WhatsApp berdasarkan kontak lembaga
            $whatsappUrl = "https://wa.me/{$lembaga['kontak_lembaga']}?text=$whatsappMessage";

            // Membuat card untuk lembaga
            $cards[] = Card::make($lembaga['nama_lembaga'], '')
                ->url($whatsappUrl) // Mengatur URL card ke URL WhatsApp
                ->color('primary')
                ->icon('heroicon-o-phone') // Menggunakan ikon yang sesuai
                ->extraAttributes(['class' => 'hover-shadow'])
                ->description('Klik untuk lapor', 'text-sm'); // Menambahkan deskripsi dengan tulisan kecil
        }
        return $cards;
    }
}
