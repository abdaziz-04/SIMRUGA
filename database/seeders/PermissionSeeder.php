<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define roles
        $roles = [
            'admin',
            'sekretaris',
            'bendahara',
            'ketua_rw',
            'ketua_rt',
            'warga',
            'ketua_rt1',
            'ketua_rt2',
            'ketua_rt3',
        ];

        // Create roles if they do not exist
        foreach ($roles as $roleName) {
            Role::firstOrCreate(['name' => $roleName]);
        }

        // Define permissions
        $permissions = [
            'view_arsipan_surat',
            'view_admin',
            'view_users',
            'view_bansos',
            'view_warga',
            'view_warga_rw',
            'view_pengajuan_surat',
            'view_jenis_iuran',
            'view_laporan_keuangan',
            'view_pemasukan_keuangan',
            'view_pengeluaran_keuangan',
            'view_pembayaran_iuran',
            'view_daftar_rt',
            'view_jadwal_pertemuan',
            'view_laporan_keuangan_warga',
            'view_laporan_keuangan',
            'view_pengumuman',
            'view_pengaduan',
            'view_kartu_keluarga',
            'view_layanan',
            'view_layanan_widget',
            'view_warga_widget',
            'view_buat_surat_warga',
            'view_pemasukan_keuangan_widget',
            'view_pengeluaran_keuangan_widget',
            'view_warga_pendatang',
            'view_layanan_widget',
            'view_surat_widget',
            'view_arsipan_surat',
            'view_laporan_keuangan_widget',
            'view_pengumuman_widget',
            'view_surat_widget',
            'edit_lembaga',
            'view_pengumuman_widget',
            'view_jumlah_warga',
            'view_rt1',
            'view_rt2',
            'view_rt3',
        ];

        // Create permissions if they do not exist
        foreach ($permissions as $permissionName) {
            Permission::firstOrCreate(['name' => $permissionName]);
        }

        // Retrieve roles
        $adminRole = Role::where('name', 'admin')->first();
        $sekretarisRole = Role::where('name', 'sekretaris')->first();
        $bendaharaRole = Role::where('name', 'bendahara')->first();
        $rwRole = Role::where('name', 'ketua_rw')->first();
        $rt1Role = Role::where('name', 'ketua_rt1')->first();
        $rt2Role = Role::where('name', 'ketua_rt2')->first();
        $rt3Role = Role::where('name', 'ketua_rt3')->first();
        $wargaRole = Role::where('name', 'warga')->first();

        // Assign permissions to roles
        $adminRole->givePermissionTo([
            'view_admin',
            'view_bansos',
            'view_warga',
            'view_pengajuan_surat',
            'view_jadwal_pertemuan',
            'view_jenis_iuran',
            'view_laporan_keuangan',
            'view_pemasukan_keuangan',
            'view_pengeluaran_keuangan',
            'view_pembayaran_iuran',
            'view_users',
            'view_daftar_rt',
            'view_pengaduan',
            'view_pengumuman',
            'view_layanan',
            'view_warga_widget',
            'view_warga_pendatang',
            'view_layanan_widget',
            'view_surat_widget',
            'edit_lembaga',
            'view_arsipan_surat',
            'view_buat_surat_warga',
            'view_jumlah_warga',
            'view_kartu_keluarga',
        ]);

        $sekretarisRole->givePermissionTo([
            'view_pengajuan_surat',
            'view_layanan',
            'view_layanan_widget',
            'view_jadwal_pertemuan',
            'view_jadwal_pertemuan',
            'edit_lembaga',
            'view_surat_widget',
            'view_arsipan_surat',
            'view_arsipan_surat',
            'view_jumlah_warga',
            'view_warga_widget',
            'view_kartu_keluarga',
        ]);

        $bendaharaRole->givePermissionTo([
            'view_jenis_iuran',
            'view_laporan_keuangan',
            'view_laporan_keuangan_widget',
            'view_pemasukan_keuangan',
            'view_pengeluaran_keuangan',
            'view_pembayaran_iuran',
            'view_pembayaran_iuran',
            'view_jadwal_pertemuan',
            'view_pembayaran_iuran',
            'view_laporan_keuangan_widget',
            'view_jumlah_warga',
        ]);

        $rwRole->givePermissionTo([
            'view_users',
            'view_warga',
            'view_warga_rw',
            'view_jadwal_pertemuan',
            'view_pengumuman',
            'view_layanan',
            'view_warga_widget',
            'view_warga_pendatang',
            'view_warga_widget',
            'edit_lembaga',
            'view_admin',
            'view_pengumuman_widget',
            'view_laporan_keuangan',
            'view_jumlah_warga',
            'view_kartu_keluarga',
            'view_bansos',
        ]);

        $wargaRole->givePermissionTo([
            'view_pengaduan',
            'view_jadwal_pertemuan',
            'view_pengajuan_surat',
            // 'view_laporan_keuangan_widget',
            'view_laporan_keuangan',
            'view_layanan',
            'view_buat_surat_warga',
            'view_pengumuman_widget'
        ]);

        $rt1Role->givePermissionTo([
            'view_rt1',
            'view_users',
            'view_jadwal_pertemuan',
            'view_warga',
            'view_laporan_keuangan',
            'view_warga_pendatang',
            'view_kartu_keluarga',
            'view_bansos',
        ]);
        $rt2Role->givePermissionTo([
            'view_rt2',
            'view_users',
            'view_jadwal_pertemuan',
            'view_laporan_keuangan',
            'view_warga_pendatang',
            'view_kartu_keluarga',
            'view_bansos',
        ]);
        $rt3Role->givePermissionTo([
            'view_rt3',
            'view_users',
            'view_jadwal_pertemuan',
            'view_laporan_keuangan',
            'view_warga_pendatang',
            'view_kartu_keluarga',
            'view_bansos',
        ]);
    }
}
