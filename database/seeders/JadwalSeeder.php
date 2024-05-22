<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jadwal')->insert([
            [
                'nama_pertemuan' => 'Rapat RW',
                'tanggal_pertemuan' => Carbon::create(2024, 5, 1),
                'keterangan_jadwal' => 'Rapat koordinasi tingkat RW',
                'pihak_terlibat' => 'Pengurus RW dan RT',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_pertemuan' => 'Pertemuan RT',
                'tanggal_pertemuan' => Carbon::create(2024, 5, 10),
                'keterangan_jadwal' => 'Rapat bulanan warga RT 01',
                'pihak_terlibat' => 'Pengurus RT dan Warga',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_pertemuan' => 'Rapat Warga',
                'tanggal_pertemuan' => Carbon::create(2024, 6, 5),
                'keterangan_jadwal' => 'Diskusi kegiatan lingkungan',
                'pihak_terlibat' => 'Seluruh Warga RT 01 RW 02',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_pertemuan' => 'Kerja Bakti',
                'tanggal_pertemuan' => Carbon::create(2024, 7, 1),
                'keterangan_jadwal' => 'Kegiatan bersih-bersih lingkungan',
                'pihak_terlibat' => 'Seluruh Warga RW 02',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
