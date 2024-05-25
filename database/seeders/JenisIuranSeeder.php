<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisIuranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Example data to seed
        $jenisIuran = [
            [
                'nama_iuran' => 'Iuran Bulanan',
                'jumlah_iuran' => '50000',
                // 'id_warga' => 1, // Adjust this according to your requirement
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_iuran' => 'Iuran Tahunan',
                'jumlah_iuran' => '250000',
                // 'id_warga' => 2, // Adjust this according to your requirement
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more data as needed
        ];

        // Insert data into jenis_iuran table
        DB::table('jenis_iuran')->insert($jenisIuran);
    }
}
