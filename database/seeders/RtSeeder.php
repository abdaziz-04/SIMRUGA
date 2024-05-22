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
                'id_rt' => 1,
                'nama_rt' => 'RT 01',
                'alamat' => 'Jalan Mawar No. 1',
                'ketua_rt' => 'Budi Santoso',
                'jumlah_anggota' => 25,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_rt' => 2,
                'nama_rt' => 'RT 02',
                'alamat' => 'Jalan Melati No. 2',
                'ketua_rt' => 'Andi Wijaya',
                'jumlah_anggota' => 30,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_rt' => 3,
                'nama_rt' => 'RT 03',
                'alamat' => 'Jalan Kamboja No. 3',
                'ketua_rt' => 'Siti Aminah',
                'jumlah_anggota' => 20,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
