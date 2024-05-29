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
            $table->id();
            // $table->unsignedBigInteger('id_warga'); // relasi ke tabel warga
            // $table->unsignedBigInteger('id_pengurus')->nullable(); // relasi ke tabel pengurus_RW (nullable karena pengaduan bisa dilakukan oleh warga tanpa melalui pengurus)
            // $table->unsignedBigInteger('id_lembagaPendukung')->nullable(); // relasi ke tabel lembaga_pendukung (nullable karena mungkin tidak selalu ada lembaga pendukung)
            $table->date('tanggal_pengaduan');
            $table->text('isi_pengaduan');
            $table->string('status', 25);
            $table->text('catatan_petugas')->nullable(); // catatan ptugas bisa kosong
            $table->timestamps();

            // Menambahkan constraint foreign key
            // $table->foreign('id_warga')->references('id')->on('warga')->onDelete('cascade');
            // $table->foreign('id_pengurus')->references('id')->on('pengurus_RW')->onDelete('cascade');
            // $table->foreign('id_lembagaPendukung')->references('id')->eon('lembaga_pendukung')->onDelete('cascade');
            
            $table->foreignId('id_warga')->constrained('warga')->onDelete('cascade');
            $table->foreignId('id_pengurus')->constrained('pengurus_RW')->onDelete('cascade')->nullable();
            $table->foreignId('id_lembagaPendukung')->constrained('lembaga_pendukung')->onDelete('cascade')->nullable();
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