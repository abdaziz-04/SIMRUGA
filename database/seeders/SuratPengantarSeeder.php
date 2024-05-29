<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SuratPengantarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat data dummy untuk tabel 'surat_pengantar'
        $suratPengantar = [
            [
                'id_warga' => 1, // Sesuaikan dengan ID yang ada di tabel warga
                'tujuan_surat' => 'Permohonan KTP',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_warga' => 2, // Sesuaikan dengan ID yang ada di tabel warga
                'tujuan_surat' => 'Permohonan KK',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
           
            // Tambahkan data surat pengantar lainnya sesuai kebutuhan
        ];

        // Masukkan data ke dalam tabel 'surat_pengantar'
        foreach ($suratPengantar as $surat) {
            DB::table('surat_pengantar')->insert($surat);
        }
    }
}
