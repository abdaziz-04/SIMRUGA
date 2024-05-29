<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SuratKematianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('surat_kematian')->insert([
            [
                'id_warga' => 11, // Sesuaikan dengan ID yang ada di tabel warga
                'waktu_kematian' => Carbon::create(2024, 5, 1, 14, 30, 0),
                'sebab_kematian' => 'Sakit',
                'tempat_kematian' => 'Rumah Sakit Umum',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_warga' => 12, // Sesuaikan dengan ID yang ada di tabel warga
                'waktu_kematian' => Carbon::create(2024, 7, 23, 21, 15, 0),
                'sebab_kematian' => 'Usia Tua',
                'tempat_kematian' => 'Rumah',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
