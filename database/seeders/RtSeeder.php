<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rt')->insert([
            [
                'nama_rt' => 'RT 01',
                'alamat' => 'Jalan Mawar No. 1',
                'jumlah_anggota' => 25,
                'ketua_rt' => 'Budi Santoso',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_rt' => 'RT 02',
                'alamat' => 'Jalan Melati No. 2',
                'jumlah_anggota' => 30,
                'ketua_rt' => 'Andi Wijaya',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_rt' => 'RT 03',
                'alamat' => 'Jalan Kamboja No. 3',
                'jumlah_anggota' => 20,
                'ketua_rt' => 'Siti Aminah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
