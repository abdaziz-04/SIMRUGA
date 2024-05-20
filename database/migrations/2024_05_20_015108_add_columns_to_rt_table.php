<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('m_r_t', function (Blueprint $table) {
            $table->string('kode_rt')->unique()->after('rt_id'); 
            $table->string('kelurahan')->after('kode_rt');
            $table->string('kecamatan')->after('kelurahan');
            $table->integer('jumlah_warga')->after('kecamatan');
            $table->float('luas_wilayah', 8, 2)->after('jumlah_warga'); 
            $table->float('kepdatan_penduduk', 8, 2)->after('luas_wilayah'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('rt', function (Blueprint $table) {
            //
        });
    }
};
