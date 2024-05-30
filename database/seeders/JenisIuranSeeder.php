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
                'nama_iuran' => 'Iuran Mingguan Sampah',
                'jumlah_iuran' => '50000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_iuran' => 'Iuran Mingguan Kematian',
                'jumlah_iuran' => '50000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_iuran' => 'Iuran Kas Bulanan',
                'jumlah_iuran' => '100000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Insert data into jenis_iuran table
        DB::table('jenis_iuran')->insert($jenisIuran);
    }
}
