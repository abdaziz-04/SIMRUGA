<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kriteria')->insert([
            ['kriteria' => 'kondisi rumah',  'jenis' => 'Benefit', 'bobot' => 0.37],
            ['kriteria' => 'kelayakan', 'jenis' => 'Benefit', 'bobot' => 0.23],
            ['kriteria' => 'status pernikahan',  'jenis' => 'Benefit', 'bobot' => 0.16],
            ['kriteria' => 'jumlah anak', 'jenis' => 'Benefit', 'bobot' => 0.11],
            ['kriteria' => 'jumlah tanggungan', 'jenis' => 'Benefit', 'bobot' => 0.07],
            ['kriteria' => 'umur',  'jenis' => 'Cost', 'bobot' => 0.04],
            ['kriteria' => 'PHK',  'jenis' => 'Cost', 'bobot' => 0.02],
        ]);
    }
}
