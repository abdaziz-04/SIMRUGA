<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        // Buat data dummy untuk tabel 'surat'
        $surat = [
            ['nama_surat' => 'Surat Keterangan Usaha'],
            ['nama_surat' => 'Surat Keterangan Domisili'],
            ['nama_surat' => 'Surat Keterangan Penghasilan'],
            // tambahkan data surat lainnya sesuai kebutuhan
        ];

        // Masukkan data ke dalam tabel 'surat'
        DB::table('surat')->insert($surat);
    }
}
