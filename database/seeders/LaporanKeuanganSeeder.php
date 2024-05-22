<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LaporanKeuanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('laporan_keuangan')->insert([
            [
                'id_pemasukan' => 1, // Sesuaikan dengan ID yang ada di tabel pemasukan_keuangan
                'id_pengeluaran' => 1, // Sesuaikan dengan ID yang ada di tabel pengeluaran_keuangan
                'total_saldo' => '3000000', // Total saldo sebagai contoh
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_pemasukan' => 2, // Sesuaikan dengan ID yang ada di tabel pemasukan_keuangan
                'id_pengeluaran' => 2, // Sesuaikan dengan ID yang ada di tabel pengeluaran_keuangan
                'total_saldo' => '-1500000', // Total saldo sebagai contoh
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_pemasukan' => 3, // Sesuaikan dengan ID yang ada di tabel pemasukan_keuangan
                'id_pengeluaran' => 3, // Sesuaikan dengan ID yang ada di tabel pengeluaran_keuangan
                'total_saldo' => '500000', // Total saldo sebagai contoh
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
