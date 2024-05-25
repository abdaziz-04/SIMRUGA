<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PemasukanKeuanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pemasukan_keuangan')->insert([
            [
                'jenis_pemasukan' => 'Iuran Warga',
                'tanggal' => Carbon::create(2024, 1, 10),
                'jumlah_pemasukan' => '5000000',
                'keterangan' => 'Iuran bulanan warga',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'jenis_pemasukan' => 'Donasi',
                'tanggal' => Carbon::create(2024, 2, 20),
                'jumlah_pemasukan' => '2000000',
                'keterangan' => 'Donasi dari sponsor acara lingkungan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'jenis_pemasukan' => 'Sumbangan Acara',
                'tanggal' => Carbon::create(2024, 3, 15),
                'jumlah_pemasukan' => '1500000',
                'keterangan' => 'Sumbangan untuk acara RT',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
