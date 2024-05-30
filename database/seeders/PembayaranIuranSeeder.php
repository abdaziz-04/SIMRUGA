<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PembayaranIuranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pembayaran_iuran')->insert([
            [
                'id_iuran' => 1,
                'id_warga' => 23,
                'tanggal' => '2024-05-28',
                'jumlah_pembayaran' => 50000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                
                'id_iuran' => 2,
                'id_warga' => 14,
                'tanggal' => '2024-05-28',
                'jumlah_pembayaran' => 50000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_iuran' => 2,
                'id_warga' => 25,
                'tanggal' => '2024-05-28',
                'jumlah_pembayaran' => 100000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
