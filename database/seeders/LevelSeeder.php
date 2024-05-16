<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $data = [

        ['level_id' => 1,'level_kode'=>'WRG','level_nama' =>'Warga'],
        ['level_id' => 2,'level_kode'=>'Kt_Rw','level_nama' =>'Ketua_RW'],
        ['level_id' => 3,'level_kode'=>'Sekre_Rw','level_nama' =>'Sekretaris_RW'],
        ['level_id' => 4,'level_kode'=>'Bdh_Rw','level_nama' =>'Bendahara_RW'],
        ['level_id' => 5,'level_kode'=>'Kt_Rt','level_nama' =>'Ketua_Rt'],
        ['level_id' => 6,'level_kode'=>'Sekre_Rt','level_nama' =>'Sekretaris_Rt'],
        ['level_id' => 7,'level_kode'=>'Bdh_Rt','level_nama' =>'Bendahara_Rt'],
    ];

    DB::table('m_level')->insert($data);
    }
}
