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
                'id_warga' => 1,
                'id_iuran' => 1,
                'tanggal' => Carbon::now()->format('Y-m-d'),
                'jumlah_pembayaran' => 50000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_warga' => 1,
                'id_iuran' => 2,
                'tanggal' => Carbon::now()->format('Y-m-d'),
                'jumlah_pembayaran' => 75000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            
        ]);
    }
}
