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
                'id_warga' => 13// Pastikan ID ini sesuai dengan data di tabel warga
            ],
            [
                'nama_pengurus' => 'Gina Lestar',
                'jabatan' => 'Bendahara RW',
                'no_telepon' => '081234567891',
                'id_warga' => 14 // Pastikan ID ini sesuai dengan data di tabel warga
            ],
            [
                'nama_pengurus' => 'Eko ',
                'jabatan' => 'Sekretaris RW',
                'no_telepon' => '081234567892',
                'id_warga' => 15 // Pastikan ID ini sesuai dengan data di tabel warga
            ],
            [
                
                'nama_pengurus' => 'Erci ',
                'jabatan' => 'Ketua RT',
                'no_telepon' => '081234567892',
                'id_warga' => 20 // Pastikan ID ini sesuai dengan data di tabel warga
            ],
        ]);
    }
}
