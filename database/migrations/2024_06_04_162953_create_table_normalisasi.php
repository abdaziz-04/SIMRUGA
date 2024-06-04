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

        Schema::create('normalisasi', function (Blueprint $table) {
            $table->id();
            $table->string('alternatif');
            $table->string('kondisi_rumah');
            $table->string('kelayakan');
            $table->string('status_pernikahan');
            $table->integer('jumlah_anak');
            $table->integer('jumlah_tanggungan');
            $table->integer('umur_yang_bekerja');
            $table->string('phk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('normalisasi');
    }
};
