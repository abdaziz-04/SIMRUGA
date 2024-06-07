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
            ['kriteria' => 'kondisi rumah', 'kode_kriteria' => 'C1', 'jenis' => 'Benefit', 'bobot' => 0.37],
            ['kriteria' => 'kelayakan', 'kode_kriteria' => 'C2', 'jenis' => 'Benefit', 'bobot' => 0.23],
            ['kriteria' => 'status pernikahan', 'kode_kriteria' => 'C3', 'jenis' => 'Benefit', 'bobot' => 0.16],
            ['kriteria' => 'jumlah anak', 'kode_kriteria' => 'C4', 'jenis' => 'Benefit', 'bobot' => 0.11],
            ['kriteria' => 'jumlah tanggungan', 'kode_kriteria' => 'C5', 'jenis' => 'Benefit', 'bobot' => 0.07],
            ['kriteria' => 'umur', 'kode_kriteria' => 'C6', 'jenis' => 'Cost', 'bobot' => 0.04],
            ['kriteria' => 'PHK', 'kode_kriteria' => 'C7', 'jenis' => 'Cost', 'bobot' => 0.02],
        ]);
    }
}
