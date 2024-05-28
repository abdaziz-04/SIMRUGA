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
                'total_pemasukan' => '5000000',
                'total_pengeluaran' => '2000000',
                'keterangan_pemasukan' => 'Iuran warga RW 9',
                'keterangan_pengeluaran'=> 'Pembelian Peralatan',
                'tanggal' => Carbon::create(2024, 1, 10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_pemasukan' => 2, // Sesuaikan dengan ID yang ada di tabel pemasukan_keuangan
                'id_pengeluaran' => 2, // Sesuaikan dengan ID yang ada di tabel pengeluaran_keuangan
                'total_saldo' => '1500000', // Total saldo sebagai contoh
                'total_pemasukan' => '2000000',
                'total_pengeluaran' => '500000',
                'keterangan_pemasukan' => 'Donasi dari sponsor acara lingkungan',
                'keterangan_pengeluaran'=> 'Biaya acara peringatan hari jadi RT',
                'tanggal' => Carbon::create(2024, 2, 20),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_pemasukan' => 3, // Sesuaikan dengan ID yang ada di tabel pemasukan_keuangan
                'id_pengeluaran' => 3, // Sesuaikan dengan ID yang ada di tabel pengeluaran_keuangan
                'total_saldo' => '500000', // Total saldo sebagai contoh
                'total_pemasukan' => '1000000',
                'total_pengeluaran' => '500000',
                'keterangan_pemasukan' => 'Sumbangan untuk acara RT',
                'keterangan_pengeluaran'=> 'Pembayaran listrik untuk fasilitas umum',
                'tanggal' => Carbon::create(2024, 3, 15),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_pemasukan' => 4, // Sesuaikan dengan ID yang ada di tabel pemasukan_keuangan
                'id_pengeluaran' => 4, // Sesuaikan dengan ID yang ada di tabel pengeluaran_keuangan
                'total_saldo' => '200000', // Total saldo sebagai contoh
                'total_pemasukan' => '200000',
                'total_pengeluaran' => '150000',
                'keterangan_pemasukan' => 'Iuran warga RW 9',
                'keterangan_pengeluaran'=> 'Menjenguk orang sakit',
                'tanggal' => Carbon::create(2024, 5, 28),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
