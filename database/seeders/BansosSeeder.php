<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BansosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bansos')->insert([
            [
                'id_warga' => 1, // Sesuaikan dengan ID yang ada di tabel warga
                'jenis_bantuan' => 'Sembako',
                'jumlah_bantuan' => 5,
                'tanggal_distribusi' => Carbon::create(2024, 5, 1),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_warga' => 2, // Sesuaikan dengan ID yang ada di tabel warga
                'jenis_bantuan' => 'Perlengkapan Sekolah',
                'jumlah_bantuan' => 2,
                'tanggal_distribusi' => Carbon::create(2024, 7, 20),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
