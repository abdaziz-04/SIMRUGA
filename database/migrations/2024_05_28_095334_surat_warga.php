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
        Schema::create('surat_warga', function (Blueprint $table) {
            $table->id('surat_id');
            $table->unsignedBigInteger('id_warga')->nullable();
            $table->string('jenis_surat');

            $table->string('nama_alm')->nullable();
            $table->string('NIK_alm', 25)->nullable();
            $table->date('tanggal_lahir_alm')->nullable();
            $table->char('jenis_kelamin_alm', 1)->nullable();
            $table->string('status_kawin_alm')->nullable();
            $table->string('alamat_alm')->nullable();
            $table->string('usia_alm')->nullable();
            $table->dateTime('waktu_kematian_alm')->nullable();
            $table->string('sebab_kematian_alm')->nullable();
            $table->string('tempat_kematian_alm')->nullable();
            $table->string('nama_warga')->nullable();
            $table->string('alamat')->nullable();
            $table->string('NIK')->nullable();
            $table->string('jenis_kelamin')->nullable();

            $table->string('tujuan_surat')->nullable();

            $table->timestamps();

            $foreign = $table->foreign('id_warga')->references('id')->on('warga');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
