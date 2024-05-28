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
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->increments('id_pengaduan');
            $table->unsignedInteger('id_warga'); // relasi ke tabel warga
            $table->unsignedInteger('id_pengurus')->nullable(); // relasi ke tabel pengurus_RW (nullable karena pengaduan bisa dilakukan oleh warga tanpa melalui pengurus)
            $table->unsignedInteger('id_lembagaPendukung')->nullable(); // relasi ke tabel lembaga_pendukung (nullable karena mungkin tidak selalu ada lembaga pendukung)
            $table->date('tanggal_pengaduan');
            $table->text('isi_pengaduan');
            $table->string('status', 25);
            $table->text('catatan_petugas')->nullable(); // catatan petugas bisa kosong

            $table->timestamps();

            // Menambahkan constraint foreign key
            $table->foreign('id_warga')->references('id_warga')->on('warga')->onDelete('cascade');
            $table->foreign('id_pengurus')->references('id_pengurus')->on('pengurus_RW')->onDelete('cascade');
            $table->foreign('id_lembagaPendukung')->references('id_lembagaPendukung')->on('lembaga_pendukung')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengaduan');
    }
};