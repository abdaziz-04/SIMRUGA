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
        Schema::create('surat_tidak_mampu', function (Blueprint $table) {
            $table->increments('id_surat_tidak_mampu');
            $table->unsignedInteger('id_warga'); // relasi ke tabel warga
            
            $table->timestamps();

            // Menambahkan constraint foreign key
            $table->foreign('id_warga')->references('id')->on('warga')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat_tidak_mampu');
    }
};
