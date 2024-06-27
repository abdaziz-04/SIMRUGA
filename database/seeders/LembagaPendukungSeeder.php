<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LembagaPendukungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sample data for lembaga_pendukung
        $lembagas = [
            [
                'nama_lembaga' => 'Polisi',
                'kontak_lembaga' => '+6281137802000',
                'deskripsi_lembaga' => 'Lembaga penegak hukum yang bertugas menjaga keamanan dan ketertiban masyarakat.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lembaga' => 'Dinas Pemadam Kebakaran',
                'kontak_lembaga' => '+6281230729499',
                'deskripsi_lembaga' => 'Lembaga yang bertugas memadamkan kebakaran dan memberikan bantuan penyelamatan dalam situasi darurat.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lembaga' => 'BPBD',
                'kontak_lembaga' => '+62811377050',
                'deskripsi_lembaga' => 'Lembaga yang bertanggung jawab atas kondisi urgent di masyarakat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lembaga' => 'Rumah Sakit terdekat' ,
                'kontak_lembaga' => '+6282142720405',
                'deskripsi_lembaga' => 'Lembaga kesehatan yang memberikan pelayanan medis kepada masyarakat.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Insert sample data into the lembaga_pendukung table
        DB::table('lembaga_pendukung')->insert($lembagas);
    }
}
