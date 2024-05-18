<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RT extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            [
                'rt_id'=>1,
                'nama_RT'=>'RT01',
            ],
            [
                'rt_id'=>2,
                'nama_RT'=>'RT02',
            ],
            [
                'rt_id'=>3,
                'nama_RT'=>'RT03',
            ],
            [
                'rt_id'=>4,
                'nama_RT'=>'RT04',
            ],
            [
                'rt_id'=>5,
                'nama_RT'=>'RT05',
            ],
            [
                'rt_id'=>6,
                'nama_RT'=>'RT05',
            ],
            ['rt_id'=>7,
            'nama_RT'=>'RT05',]
            
        ];
        DB::table('m_r_t')->insert($data);
    }
}
