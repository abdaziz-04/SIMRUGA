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
            'view_kartu_keluarga'
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
        $rtRole = Role::where('name', 'ketua_rt')->first();
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
<<<<<<< HEAD
<<<<<<< HEAD
            'view_pengaduan',
        ]);
=======
=======
            'view_pengaduan',
>>>>>>> 834e1d200cda416a8370b69160a6ad88645c81b4
            'view_jadwal_pertemuan',
            'view_pengaduan', 
            'view_pengajuan_surat',
            'view_kartu_keluarga'
         ]);
<<<<<<< HEAD
>>>>>>> 26013d2ef3c33171716d03c729d2318769ced2d7
=======
>>>>>>> 834e1d200cda416a8370b69160a6ad88645c81b4

        $sekretarisRole->givePermissionTo([
            'view_bansos',
            'view_warga',
            'view_pengajuan_surat',
            'view_jadwal_pertemuan',
<<<<<<< HEAD
<<<<<<< HEAD
=======
            'view_kartu_keluarga'
>>>>>>> 26013d2ef3c33171716d03c729d2318769ced2d7
=======
            'view_kartu_keluarga'
>>>>>>> 834e1d200cda416a8370b69160a6ad88645c81b4
        ]);

        $bendaharaRole->givePermissionTo([
            'view_jenis_iuran',
            'view_laporan_keuangan',
            'view_pemasukan_keuangan',
            'view_pengeluaran_keuangan',
<<<<<<< HEAD
<<<<<<< HEAD
            'view_pembayaran_iuran',
=======
            'view_jadwal_pertemuan',
            'view_pembayaran_iuran'
>>>>>>> 26013d2ef3c33171716d03c729d2318769ced2d7
=======
            'view_pembayaran_iuran',
            'view_jadwal_pertemuan',
>>>>>>> 834e1d200cda416a8370b69160a6ad88645c81b4
        ]);

        $rwRole->givePermissionTo([
            'view_users',
            'view_warga',
            'view_jadwal_pertemuan',
            'view_laporan_keuangan_warga',
            'view_pengumuman',
        ]);

        $rtRole->givePermissionTo([
            'view_users',
            'view_daftar_rt',
            'view_jadwal_pertemuan',
        ]);

        $wargaRole->givePermissionTo([
            'view_pengaduan',
            'view_pengajuan_surat',
        ]);
    }
}
