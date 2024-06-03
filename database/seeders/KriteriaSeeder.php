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
        DB::table('criterias')->insert([
            ['name' => 'Pekerjaan', 'kategori' => 'BENEFIT', 'keterangan' => 'Kriteria pekerjaan'],
            ['name' => 'Penghasilan', 'kategori' => 'BENEFIT', 'keterangan' => 'Kriteria penghasilan'],
            ['name' => 'Status Perkawinan', 'kategori' => 'COST', 'keterangan' => 'Kriteria status perkawinan'],
            ['name' => 'Status Kepemilikan Rumah', 'kategori' => 'COST', 'keterangan' => 'Kriteria status kepemilikan rumah'],
            ['name' => 'Sumber Air Bersih', 'kategori' => 'BENEFIT', 'keterangan' => 'Kriteria sumber air bersih'],
            ['name' => 'Token Listrik', 'kategori' => 'COST', 'keterangan' => 'Kriteria token listrik'],
        ]);
    }
}
