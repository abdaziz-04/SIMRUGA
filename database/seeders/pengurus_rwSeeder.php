<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengurusRWSeeder extends Seeder
{
    public function run()
    {
        DB::table('pengurus_rw')->truncate();

        DB::table('pengurus_rw')->insert([
            ['id_warga' => 1, 'jabatan' => 'Ketua RW', 'nama_pengurus' => 'Ahmad Fauzi', 'no_telepon' => '081234567890'],
            ['id_warga' => 2, 'jabatan' => 'Sekretaris RW', 'nama_pengurus' => 'Siti Aminah', 'no_telepon' => '081234567891'],
            ['id_warga' => 3, 'jabatan' => 'Bendahara RW', 'nama_pengurus' => 'Budi Santoso', 'no_telepon' => '081234567892'],
            ['id_warga' => 4, 'jabatan' => 'Anggota RW', 'nama_pengurus' => 'Ani Setiani', 'no_telepon' => '081234567893'],
            ['id_warga' => 5, 'jabatan' => 'Anggota RW', 'nama_pengurus' => 'Dewi Sartika', 'no_telepon' => '081234567894'],
            ['id_warga' => 6, 'jabatan' => 'Anggota RW', 'nama_pengurus' => 'Eko Purwanto', 'no_telepon' => '081234567895'],
            ['id_warga' => 7, 'jabatan' => 'Anggota RW', 'nama_pengurus' => 'Fajar Nugroho', 'no_telepon' => '081234567896'],
            ['id_warga' => 8, 'jabatan' => 'Anggota RW', 'nama_pengurus' => 'Gina Lestari', 'no_telepon' => '081234567897'],
            ['id_warga' => 9, 'jabatan' => 'Anggota RW', 'nama_pengurus' => 'Hariyanto', 'no_telepon' => '081234567898'],
            ['id_warga' => 10, 'jabatan' => 'Anggota RW', 'nama_pengurus' => 'Indah Permata', 'no_telepon' => '081234567899'],
            ['id_warga' => 11, 'jabatan' => 'Anggota RW', 'nama_pengurus' => 'Ahmad Yasin', 'no_telepon' => '081234567800'],
            ['id_warga' => 12, 'jabatan' => 'Anggota RW', 'nama_pengurus' => 'Kurnia Sari', 'no_telepon' => '081234567801'],
            ['id_warga' => 13, 'jabatan' => 'Anggota RW', 'nama_pengurus' => 'Lestari', 'no_telepon' => '081234567802'],
            ['id_warga' => 14, 'jabatan' => 'Anggota RW', 'nama_pengurus' => 'Mardiyanto', 'no_telepon' => '081234567803'],
            ['id_warga' => 15, 'jabatan' => 'Anggota RW', 'nama_pengurus' => 'Nina Juliana', 'no_telepon' => '081234567804'],
            ['id_warga' => 16, 'jabatan' => 'Anggota RW', 'nama_pengurus' => 'Anna Taylor', 'no_telepon' => '081234567899'],
            ['id_warga' => 17, 'jabatan' => 'Anggota RW', 'nama_pengurus' => 'James Anderson', 'no_telepon' => '081234567900'],
            ['id_warga' => 18, 'jabatan' => 'Anggota RW', 'nama_pengurus' => 'Maria Thomas', 'no_telepon' => '081234567901'],
        ]);
    }
}
