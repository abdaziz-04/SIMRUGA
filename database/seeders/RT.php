<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RT extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_r_t')->insert([
            [
                'nama_RT' => 'RT 01',
                'kode_rt' => 'RT001',
                'kelurahan' => 'Kelurahan A',
                'kecamatan' => 'Kecamatan A',
                'jumlah_warga' => 100,
                'luas_wilayah' => 1.5,
                'kepdatan_penduduk' => 66.67,
            ],
            [
                'nama_RT' => 'RT 02',
                'kode_rt' => 'RT002',
                'kelurahan' => 'Kelurahan B',
                'kecamatan' => 'Kecamatan B',
                'jumlah_warga' => 150,
                'luas_wilayah' => 2.0,
                'kepdatan_penduduk' => 75.00,
            ],
            [
                'nama_RT' => 'RT 03',
                'kode_rt' => 'RT003',
                'kelurahan' => 'Kelurahan C',
                'kecamatan' => 'Kecamatan C',
                'jumlah_warga' => 200,
                'luas_wilayah' => 2.5,
                'kepdatan_penduduk' => 80.00,
            ],
            [
                'nama_RT' => 'RT 04',
                'kode_rt' => 'RT004',
                'kelurahan' => 'Kelurahan D',
                'kecamatan' => 'Kecamatan D',
                'jumlah_warga' => 120,
                'luas_wilayah' => 1.8,
                'kepdatan_penduduk' => 66.67,
            ],
            [
                'nama_RT' => 'RT 05',
                'kode_rt' => 'RT005',
                'kelurahan' => 'Kelurahan E',
                'kecamatan' => 'Kecamatan E',
                'jumlah_warga' => 180,
                'luas_wilayah' => 2.2,
                'kepdatan_penduduk' => 81.82,
            ],
        ]);
        DB::table('m_r_t')->insert($data);
    }
}
