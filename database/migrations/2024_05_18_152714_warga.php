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
        if (!Schema::hasTable('warga')) {
            Schema::create('warga', function (Blueprint $table) {
                $table->id('warga_id');
                $table->unsignedBigInteger('rt_id')->index();
                $table->string('nama_lengkap', 250);
                $table->string('foto');
                $table->unsignedBigInteger('id_NIK_KK')->index();
                $table->string('status');
                $table->string('nomor_KTP');
                $table->string('agama');
                $table->string('tempat_lahir');
                $table->string('tanggal_lahir');
                $table->string('gaji');
                $table->string('tanggungan');
                $table->string('jenis_kelamin');
                $table->string('pekerjaan');
                $table->string('kewarganegaraan');
                $table->timestamps();

                $table->foreign('rt_id')->references('rt_id')->on('m_r_t');
                $table->foreign('id_NIK_KK')->references('id_NIK_KK')->on('nik_kk');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_warga');
    }
};
