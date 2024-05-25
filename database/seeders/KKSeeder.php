<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KKSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kartu_keluarga')->insert([
            [
                'nama_kepala_keluarga' => 'John Doe',
                'no_kk' => '1234567890123456',
                'rt_rw' => '01/02',
                'alamat' => 'Jl. Example No. 1, Jakarta',
            ],
            [
                'nama_kepala_keluarga' => 'Jane Smith',
                'no_kk' => '1234567890123457',
                'rt_rw' => '02/03',
                'alamat' => 'Jl. Example No. 2, Jakarta',
            ],
            [
                'nama_kepala_keluarga' => 'Robert Brown',
                'no_kk' => '1234567890123458',
                'rt_rw' => '03/04',
                'alamat' => 'Jl. Example No. 3, Jakarta',
            ],
        ]);
    }
}
