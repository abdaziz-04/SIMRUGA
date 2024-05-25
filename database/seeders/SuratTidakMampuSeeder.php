<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SuratTidakMampuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('surat_tidak_mampu')->insert([
            [
                'id_warga' => 1, // Sesuaikan dengan ID yang ada di tabel warga
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_warga' => 2, // Sesuaikan dengan ID yang ada di tabel warga
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
           
        ]);
    }
}
