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
            $table->unsignedBigInteger('id_warga')->nullable();
            $table->string('alternatif');
            $table->integer('kondisi_rumah');
            $table->integer('kelayakan');
            $table->integer('status_pernikahan');
            $table->integer('jumlah_anak');
            $table->integer('jumlah_tanggungan');
            $table->integer('umur_yang_bekerja');
            $table->integer('phk');
            $table->timestamps();

            $table->foreign('id_warga')->references('id')->on('warga')->onDelete('cascade');
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
