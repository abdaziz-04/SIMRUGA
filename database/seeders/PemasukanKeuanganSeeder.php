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
                'jenis_pemasukan' => 'Iuran',
                'tanggal' => '2024-01-10',
                'jumlah_pemasukan' => '5000000',
                'keterangan' => 'Iuran warga RW 9',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'jenis_pemasukan' => 'Donasi',
                'tanggal' => '2024-02-20',
                'jumlah_pemasukan' => '2000000',
                'keterangan' => 'Donasi dari sponsor acara lingkungan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'jenis_pemasukan' => 'Sumbangan Acara',
                'tanggal' => '2024-03-30',
                'jumlah_pemasukan' => '1500000',
                'keterangan' => 'Sumbangan untuk acara RT',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'jenis_pemasukan' => 'Iuran',
                'tanggal' => '2024-05-28',
                'jumlah_pemasukan' => '200000',
                'keterangan' => 'Iuran warga RW 9',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
