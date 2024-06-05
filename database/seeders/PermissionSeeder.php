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
            'ketua_rt4',
            'ketua_rt5',
            'ketua_rt6',
            'ketua_rt7',
            'ketua_rt8',
            'ketua_rt9',
            'ketua_rt10',
            'ketua_rt11',
            'ketua_rt12'
        ];

        // Create roles if they do not exist
        foreach ($roles as $roleName) {
            Role::firstOrCreate(['name' => $roleName]);
        }

        // Define permissions
        $permissions = [
            'view_admin',
            'view_users',
            'view_bansos',
            'view_warga',
            'view_pengajuan_surat',
            'view_jenis_iuran',
            'view_laporan_keuangan',
            'view_pemasukan_keuangan',
            'view_pengeluaran_keuangan',
            'view_pembayaran_iuran',
            'view_daftar_rt',
            'view_jadwal_pertemuan',
            'view_laporan_keuangan_warga',
            'view_pengumuman',
            'view_pengaduan',
            'view_kartu_keluarga',
            'view_layanan',
            'view_layanan_widget',
            'view_warga_widget',
            'view_buat_surat_warga',
            'view_rt1',
            'view_rt2',
            'view_rt3',
            'view_rt4',
            'view_rt5',
            'view_rt6',
            'view_rt7',
            'view_rt8',
            'view_rt9',
            'view_rt10',
            'view_rt11',
            'view_rt12'
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
        $rt4Role = Role::where('name', 'ketua_rt4')->first();
        $rt5Role = Role::where('name', 'ketua_rt5')->first();
        $rt6Role = Role::where('name', 'ketua_rt6')->first();
        $rt7Role = Role::where('name', 'ketua_rt7')->first();
        $rt8Role = Role::where('name', 'ketua_rt8')->first();
        $rt9Role = Role::where('name', 'ketua_rt9')->first();
        $rt10Role = Role::where('name', 'ketua_rt10')->first();
        $rt11Role = Role::where('name', 'ketua_rt11')->first();
        $rt12Role = Role::where('name', 'ketua_rt12')->first();
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
        ]);

        $sekretarisRole->givePermissionTo([
            'view_bansos',
            'view_pengajuan_surat',
            'view_layanan',
            'view_layanan_widget',
            'view_jadwal_pertemuan'

        ]);

        $bendaharaRole->givePermissionTo([
            'view_jenis_iuran',
            'view_laporan_keuangan',
            'view_pemasukan_keuangan',
            'view_pengeluaran_keuangan',
            'view_pembayaran_iuran',
            'view_pembayaran_iuran',
            'view_jadwal_pertemuan',
            'view_pembayaran_iuran',
        ]);

        $rwRole->givePermissionTo([
            'view_users',
            'view_warga',
            'view_jadwal_pertemuan',
            'view_laporan_keuangan_warga',
            'view_pengumuman',
            'view_layanan',
            'view_warga_widget'
        ]);

        $wargaRole->givePermissionTo([
            'view_pengaduan',
            'view_pengajuan_surat',
            'view_laporan_keuangan',
        ]);

        $rt1Role->givePermissionTo([
            'view_rt1',
            'view_users',
            'view_jadwal_pertemuan',
            'view_warga',
            'view_laporan_keuangan',
        ]);
        $rt2Role->givePermissionTo([
            'view_rt2',
            'view_users',
            'view_jadwal_pertemuan',
            'view_laporan_keuangan',
        ]);
        $rt3Role->givePermissionTo([
            'view_rt3',
            'view_users',
            'view_jadwal_pertemuan',
            'view_laporan_keuangan',
        ]);
        $rt4Role->givePermissionTo([
            'view_rt4',
            'view_users',
            'view_jadwal_pertemuan',
            'view_laporan_keuangan',
        ]);
        $rt5Role->givePermissionTo([
            'view_rt5',
            'view_users',
            'view_jadwal_pertemuan',
            'view_laporan_keuangan',
        ]);
        $rt6Role->givePermissionTo([
            'view_rt6',
            'view_users',
            'view_jadwal_pertemuan',
            'view_laporan_keuangan',
        ]);
        $rt7Role->givePermissionTo([
            'view_rt7',
            'view_users',
            'view_jadwal_pertemuan',
            'view_laporan_keuangan',
        ]);
        $rt8Role->givePermissionTo([
            'view_rt8',
            'view_users',
            'view_jadwal_pertemuan',
            'view_laporan_keuangan',
        ]);
        $rt9Role->givePermissionTo([
            'view_rt9',
            'view_users',
            'view_jadwal_pertemuan',
            'view_laporan_keuangan',
        ]);
        $rt10Role->givePermissionTo([
            'view_rt10',
            'view_users',
            'view_jadwal_pertemuan',
            'view_laporan_keuangan',
        ]);
        $rt11Role->givePermissionTo([
            'view_rt11',
            'view_users',
            'view_jadwal_pertemuan',
            'view_laporan_keuangan',
        ]);
        $rt12Role->givePermissionTo([
            'view_rt12',
            'view_users',
            'view_jadwal_pertemuan',
            'view_laporan_keuangan',
        ]);
    }
}
