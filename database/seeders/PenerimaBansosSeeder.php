<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PenerimaBansosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('penerima_bansos')->insert([
            [
                'id_rt' => 1, // Sesuaikan dengan ID yang ada di tabel rt
                'gaji' => '3000000',
                'tanggungan' => '3',
                'tangal_lahir' => Carbon::create(1980, 5, 1),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_rt' => 2, // Sesuaikan dengan ID yang ada di tabel rt
                'gaji' => '2500000',
                'tanggungan' => '2',
                'tangal_lahir' => Carbon::create(1975, 8, 15),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_rt' => 3, // Sesuaikan dengan ID yang ada di tabel rt
                'gaji' => '1500000',
                'tanggungan' => '4',
                'tangal_lahir' => Carbon::create(1990, 2, 20),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
