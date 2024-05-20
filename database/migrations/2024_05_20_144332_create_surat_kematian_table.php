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
        Schema::create('surat_kematian', function (Blueprint $table) {
            $table->increments('id_surat_kematian');
            $table->unsignedInteger('id_warga'); // relasi ke tabel warga
            $table->dateTime('waktu_kematian');
            $table->string('sebab_kematian');
            $table->string('tempat_kematian');
            
            $table->timestamps();

            // Menambahkan constraint foreign key
            $table->foreign('id_warga')->references('id_warga')->on('warga')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_kematian');
    }
};
