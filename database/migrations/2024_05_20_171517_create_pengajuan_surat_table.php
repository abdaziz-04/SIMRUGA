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
        Schema::create('pengajuan_surat', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_surat'); // relasi ke tabel surat
            $table->string('nama_warga');
            $table->string('NIK');
            $table->string('keterangan')->nullable(); // keterangan bisa kosong
            $table->date('tanggal_pengajuan');
            $table->string('status');
            
            $table->timestamps();

            // Menambahkan constraint foreign key
            $table->foreign('id_surat')->references('id')->on('surat')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuan_surat');
    }
};
