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
         // Buat peran
         $adminRole = Role::create(['name' => 'admin']);
         $sekretarisRole = Role::create(['name' => 'sekretaris']);
         $bendaharaRole = Role::create(['name' => 'bendahara']);
         $rwRole = Role::create(['name' => 'ketua_rw']);
         $rtRole = Role::create(['name' => 'ketua_rt']);
         $wargaRole = Role::create(['name' => 'warga']); 
 
         // Admin
         Permission::create(['name' => 'view_admin']); 
         Permission::create(['name' => 'view_users']); // rw rt

         // Sekretaris
         Permission::create(['name' => 'view_bansos']); 
         Permission::create(['name' => 'view_warga']); // RW JUGA
         Permission::create(['name' => 'view_pengajuan_surat']);

        // Bendahara
         Permission::create(['name' => 'view_jenis_iuran']); 
         Permission::create(['name' => 'view_laporan_keuangan']); 
         Permission::create(['name' => 'view_pemasukan_keuangan']); 
         Permission::create(['name' => 'view_pengeluaran_keuangan']);
         Permission::create(['name' => 'view_pembayaran_iuran']);

        //  RT
         Permission::create(['name' => 'view_daftar_rt']);

        //  RW
         Permission::create(['name' => 'view_jadwal_pertemuan']); // RT RW Sekretaris
         Permission::create(['name' => 'view_laporan_keuangan_warga']);
         Permission::create(['name' => 'view_pengumuman']);

        //  Warga
        Permission::create(['name' => 'view_pengaduan']);
        Permission::create(['name' => 'view_pengajuan_surat']);
 
         // Assign permissions to roles
         $adminRole->givePermissionTo('view_admin');

         $sekretarisRole->givePermissionTo([
            'view_bansos', 
            'view_warga', 
            'view_pengajuan_surat',
            'view_jadwal_pertemuan'
        ]);
        
        $bendaharaRole->givePermissionTo([
            'view_jenis_iuran', 
            'view_laporan_keuangan', 
            'view_pemasukan_keuangan', 
            'view_pengeluaran_keuangan',
            'view_pembayaran_iuran'
        ]);
        
        $rwRole->givePermissionTo([
            'view_users',
            'view_warga',
            'view_jadwal_pertemuan',
            'view_laporan_keuangan_warga',
            'view_pengumuman'
        ]);
        
        $rtRole->givePermissionTo([
            'view_users',
            'view_daftar_rt',
            'view_jadwal_pertemuan'
        ]);
        
        $wargaRole->givePermissionTo([
            'view_pengaduan', 
            'view_pengajuan_surat'
        ]);
    }
}
