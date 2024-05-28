<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PengeluaranKeuanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pengeluaran_keuangan')->insert([
            [
                'jenis_pengeluaran' => 'Pembelian Peralatan',
                'tanggal' => Carbon::create(2024, 1, 10),
                'jumlah_pengeluaran' => '2000000',
                'keterangan' => 'Pembelian alat kebersihan lingkungan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'jenis_pengeluaran' => 'Biaya Acara',
                'tanggal' => Carbon::create(2024, 2, 15),
                'jumlah_pengeluaran' => '3500000',
                'keterangan' => 'Biaya acara peringatan hari jadi RT',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'jenis_pengeluaran' => 'Pembayaran Listrik',
                'tanggal' => Carbon::create(2024, 3, 20),
                'jumlah_pengeluaran' => '1000000',
                'keterangan' => 'Pembayaran listrik untuk fasilitas umum',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'jenis_pengeluaran' => 'Menjenguk Orang Sakit',
                'tanggal' => Carbon::create(2024, 5, 28),
                'jumlah_pengeluaran' => '150000',
                'keterangan' => 'Menjenguk orang sakit',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
