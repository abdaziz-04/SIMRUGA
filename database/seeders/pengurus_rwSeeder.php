<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pengurus_rwSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pengurus_RW')->insert([
            [
                'nama_pengurus' => 'Budi Santoso',
                'jabatan' => 'Ketua RW',
                'no_telepon' => '081234567890',
                'id_warga' => 1
            ],
            [
                'nama_pengurus' => 'Gina Lestar',
                'jabatan' => 'Bendahara RW',
                'no_telepon' => '081234567891',
                'id_warga' => 2
            ],
            [
                'nama_pengurus' => 'Eko ',
                'jabatan' => 'Sekretaris RW',
                'no_telepon' => '081234567892',
                'id_warga' => 3
            ],
            [

                'nama_pengurus' => 'Erci ',
                'jabatan' => 'Ketua RT 1',
                'no_telepon' => '081234567892',
                'id_warga' => 4
            ],
            [
                'nama_pengurus' => 'Erci Sukaesi ',
                'jabatan' => 'Ketua RT 2',
                'no_telepon' => '081234587892',
                'id_warga' => 5
            ],

        ]);
    }
}
