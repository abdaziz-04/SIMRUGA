<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pengumuman;

class PengumumanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seeding data example
        Pengumuman::create([
            'gambar' => 'image1.jpg',
            'isi_pengumuman' => 'Isi pengumuman 1',
            'tanggal_pengumuman' => '2024-05-24',
            
        ]);

        Pengumuman::create([
            'gambar' => 'image2.jpg',
            'isi_pengumuman' => 'Isi pengumuman 2',
            'tanggal_pengumuman' => '2024-05-25',
            
        ]);
    }
}
