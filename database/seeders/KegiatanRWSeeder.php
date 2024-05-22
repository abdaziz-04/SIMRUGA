<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class KegiatanRWSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kegiatan_RW')->insert([
            [
                'id_pengurus' => 1, // Sesuaikan dengan ID yang ada di tabel pengurus_RW
                'nama_kegiatan' => 'Kerja Bakti',
                'tanggal_kegiatan' => '2024-06-01',
                'waktu_kegiatan' => '08:00',
                'tempat_kegiatan' => 'Lapangan RW 01',
                'deskripsi_kegiatan' => 'Kegiatan membersihkan lingkungan sekitar RW 01.',
                'foto_kegiatan' => 'https://example.com/foto_kerja_bakti.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_pengurus' => 2, // Sesuaikan dengan ID yang ada di tabel pengurus_RW
                'nama_kegiatan' => 'Bazar RW',
                'tanggal_kegiatan' => '2024-07-01',
                'waktu_kegiatan' => '09:00',
                'tempat_kegiatan' => 'Lapangan RW 03',
                'deskripsi_kegiatan' => 'Bazar makanan dan kerajinan warga RW 03.',
                'foto_kegiatan' => 'https://example.com/foto_bazar_rw.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
