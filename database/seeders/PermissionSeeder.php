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
 
         // Buat izin
         Permission::create(['name' => 'Admin']); 
         Permission::create(['name' => 'Sekretaris']); 
         Permission::create(['name' => 'Bendahara']); 
         Permission::create(['name' => 'Ketua_RW']); 
         Permission::create(['name' => 'Ketua_RT']); 
         Permission::create(['name' => 'Warga']); 
 
         $adminRole->givePermissionTo('Admin');
         $sekretarisRole->givePermissionTo('Sekretaris');
         $bendaharaRole->givePermissionTo('Bendahara'); 
         $rwRole->givePermissionTo('Ketua_RW'); 
         $rtRole->givePermissionTo('Ketua_RT'); 
         $wargaRole->givePermissionTo('Warga'); 
    }
}
