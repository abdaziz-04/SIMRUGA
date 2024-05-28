<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KKSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kartu_keluarga')->insert([
            [
                'id' => 1,
                'nama_kepala_keluarga' => 'John Doe',
                'no_kk' => '1234567890123456',
                'rt_rw' => '01/02',
                'alamat' => 'Jl. Example No. 1, Jakarta',
            ],
            [
                'id' => 2,
                'nama_kepala_keluarga' => 'Jane Smith',
                'no_kk' => '1234567890123457',
                'rt_rw' => '02/03',
                'alamat' => 'Jl. Example No. 2, Jakarta',
            ],
            [
                'id' => 3,
                'nama_kepala_keluarga' => 'Robert Brown',
                'no_kk' => '1234567890123458',
                'rt_rw' => '03/04',
                'alamat' => 'Jl. Example No. 3, Jakarta',
            ],
            [
                'id' => 4,
                'nama_kepala_keluarga' => 'Emily White',
                'no_kk' => '1234567890123459',
                'rt_rw' => '04/05',
                'alamat' => 'Jl. Example No. 4, Jakarta',
            ],
            [
                'id' => 5,
                'nama_kepala_keluarga' => 'Michael Green',
                'no_kk' => '1234567890123460',
                'rt_rw' => '05/06',
                'alamat' => 'Jl. Example No. 5, Jakarta',
            ],
        ]);
    }
}
