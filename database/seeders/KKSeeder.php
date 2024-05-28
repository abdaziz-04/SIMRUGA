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
        // Hapus semua data dalam tabel kartu_keluarga
        DB::table('kartu_keluarga')->delete();

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
            [
                'id' => 6,
                'nama_kepala_keluarga' => 'Linda Brown',
                'no_kk' => '1234567890123461',
                'rt_rw' => '06/07',
                'alamat' => 'Jl. Example No. 6, Jakarta',
            ],
            [
                'id' => 7,
                'nama_kepala_keluarga' => 'David Johnson',
                'no_kk' => '1234567890123462',
                'rt_rw' => '07/08',
                'alamat' => 'Jl. Example No. 7, Jakarta',
            ],
            [
                'id' => 8,
                'nama_kepala_keluarga' => 'Susan Williams',
                'no_kk' => '1234567890123463',
                'rt_rw' => '08/09',
                'alamat' => 'Jl. Example No. 8, Jakarta',
            ],
            [
                'id' => 9,
                'nama_kepala_keluarga' => 'Daniel Jones',
                'no_kk' => '1234567890123464',
                'rt_rw' => '09/10',
                'alamat' => 'Jl. Example No. 9, Jakarta',
            ],
            [
                'id' => 10,
                'nama_kepala_keluarga' => 'Patricia Miller',
                'no_kk' => '1234567890123465',
                'rt_rw' => '10/11',
                'alamat' => 'Jl. Example No. 10, Jakarta',
            ],
            [
                'id' => 11,
                'nama_kepala_keluarga' => 'Christopher Davis',
                'no_kk' => '1234567890123466',
                'rt_rw' => '11/12',
                'alamat' => 'Jl. Example No. 11, Jakarta',
            ],
            [
                'id' => 12,
                'nama_kepala_keluarga' => 'Barbara Wilson',
                'no_kk' => '1234567890123467',
                'rt_rw' => '12/13',
                'alamat' => 'Jl. Example No. 12, Jakarta',
            ],
            [
                'id' => 13,
                'nama_kepala_keluarga' => 'Richard Martinez',
                'no_kk' => '1234567890123468',
                'rt_rw' => '13/14',
                'alamat' => 'Jl. Example No. 13, Jakarta',
            ],
            [
                'id' => 14,
                'nama_kepala_keluarga' => 'Jessica Garcia',
                'no_kk' => '1234567890123469',
                'rt_rw' => '14/15',
                'alamat' => 'Jl. Example No. 14, Jakarta',
            ],
            [
                'id' => 15,
                'nama_kepala_keluarga' => 'Mark Rodriguez',
                'no_kk' => '1234567890123470',
                'rt_rw' => '15/16',
                'alamat' => 'Jl. Example No. 15, Jakarta',
            ],
            // Tambahkan 3 data baru
            [
                'id' => 16,
                'nama_kepala_keluarga' => 'Anna Taylor',
                'no_kk' => '1234567890123471',
                'rt_rw' => '16/17',
                'alamat' => 'Jl. Example No. 16, Jakarta',
            ],
            [
                'id' => 17,
                'nama_kepala_keluarga' => 'James Anderson',
                'no_kk' => '1234567890123472',
                'rt_rw' => '17/18',
                'alamat' => 'Jl. Example No. 17, Jakarta',
            ],
            [
                'id' => 18,
                'nama_kepala_keluarga' => 'Maria Thomas',
                'no_kk' => '1234567890123473',
                'rt_rw' => '18/19',
                'alamat' => 'Jl. Example No. 18, Jakarta',
            ],
            [
                'id' => 19,
                'nama_kepala_keluarga' => 'Maria Thomas',
                'no_kk' => '1234567890123473',
                'rt_rw' => '18/19',
                'alamat' => 'Jl. Example No. 18, Jakarta',
            ],
            [
                'id' => 20,
                'nama_kepala_keluarga' => 'Maria Thomas',
                'no_kk' => '1234567890123473',
                'rt_rw' => '18/19',
                'alamat' => 'Jl. Example No. 18, Jakarta',
            ],
            [
                'id' => 21,
                'nama_kepala_keluarga' => 'Maria Thomas',
                'no_kk' => '1234567890123473',
                'rt_rw' => '18/19',
                'alamat' => 'Jl. Example No. 18, Jakarta',
            ],
            [
                'id' => 22,
                'nama_kepala_keluarga' => 'Maria Thomas',
                'no_kk' => '1234567890123473',
                'rt_rw' => '18/19',
                'alamat' => 'Jl. Example No. 18, Jakarta',
            ],
            [
                'id' => 23,
                'nama_kepala_keluarga' => 'Maria Thomas',
                'no_kk' => '1234567890123473',
                'rt_rw' => '18/19',
                'alamat' => 'Jl. Example No. 18, Jakarta',
            ],
            [
                'id' => 24,
                'nama_kepala_keluarga' => 'Maria Thomas',
                'no_kk' => '1234567890123473',
                'rt_rw' => '18/19',
                'alamat' => 'Jl. Example No. 18, Jakarta',
            ],
            [
                'id' => 25,
                'nama_kepala_keluarga' => 'Maria Thomas',
                'no_kk' => '1234567890123473',
                'rt_rw' => '18/19',
                'alamat' => 'Jl. Example No. 18, Jakarta',
            ],
            [
                'id' => 26,
                'nama_kepala_keluarga' => 'Maria Thomas',
                'no_kk' => '1234567890123473',
                'rt_rw' => '18/19',
                'alamat' => 'Jl. Example No. 18, Jakarta',
            ],
            [
                'id' => 27,
                'nama_kepala_keluarga' => 'Maria Thomas',
                'no_kk' => '1234567890123473',
                'rt_rw' => '18/19',
                'alamat' => 'Jl. Example No. 18, Jakarta',
            ],
            [
                'id' => 28,
                'nama_kepala_keluarga' => 'Maria Thomas',
                'no_kk' => '1234567890123473',
                'rt_rw' => '18/19',
                'alamat' => 'Jl. Example No. 18, Jakarta',
            ],
            [
                'id' => 29,
                'nama_kepala_keluarga' => 'Maria Thomas',
                'no_kk' => '1234567890123473',
                'rt_rw' => '18/19',
                'alamat' => 'Jl. Example No. 18, Jakarta',
            ],
            [
                'id' => 30,
                'nama_kepala_keluarga' => 'Maria Thomas',
                'no_kk' => '1234567890123473',
                'rt_rw' => '18/19',
                'alamat' => 'Jl. Example No. 18, Jakarta',
            ],

        ]);
    }
}

