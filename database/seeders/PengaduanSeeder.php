<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengaduanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sample active data for pengaduan
        $pengaduans = [
            [
                'id_warga' => 19,
                'id_pengurus' => 7,
                'id_lembagaPendukung' => 1, // Polisi
                'tanggal_pengaduan' => '2024-05-01',
                'isi_pengaduan' => 'Laporan kerusakan jalan di lingkungan RT 05.',
                'status' => 'proses',
                'catatan_petugas' => 'Pengaduan sedang diproses oleh tim lapangan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_warga' => 17,
                'id_pengurus' => 5,
                'id_lembagaPendukung' => 2, // Dinas Pemadam Kebakaran
                'tanggal_pengaduan' => '2024-05-10',
                'isi_pengaduan' => 'Kebocoran pipa air di lingkungan RW 03.',
                'status' => 'belum ditangani',
                'catatan_petugas' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_warga' => 14,
                'id_pengurus' => 6,
                'id_lembagaPendukung' => 3, // Dinas Kebersihan
                'tanggal_pengaduan' => '2024-05-15',
                'isi_pengaduan' => 'Pohon tumbang di jalan utama.',
                'status' => 'proses',
                'catatan_petugas' => 'Tim kebersihan sedang menuju lokasi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_warga' => 20,
                'id_pengurus' => 8,
                'id_lembagaPendukung' => 4, // Rumah Sakit
                'tanggal_pengaduan' => '2024-05-20',
                'isi_pengaduan' => 'Warga sakit membutuhkan ambulans.',
                'status' => 'belum ditangani',
                'catatan_petugas' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]
            
        ];

        // Insert sample data into the pengaduan table
        DB::table('pengaduan')->insert($pengaduans);
    }
}
