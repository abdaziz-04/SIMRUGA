<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class CardLembagaOverview extends BaseWidget
{
    protected function getCards(): array
    {
        // Definisikan data lembaga dalam array
        $lembagas = [
            [
                'nama_lembaga' => 'Polisi',
                'kontak_lembaga' => '+62811482000',
            ],
            [
                'nama_lembaga' => 'Dinas Pemadam Kebakaran',
                'kontak_lembaga' => '+6285163589113',
            ],
            [
                'nama_lembaga' => 'Dinas Kebersihan',
                'kontak_lembaga' => '+6281249455220',
            ],
            [
                'nama_lembaga' => 'Rumah Sakit',
                'kontak_lembaga' => '+6281112119119',
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
