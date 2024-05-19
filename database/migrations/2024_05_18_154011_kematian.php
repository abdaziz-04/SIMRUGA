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
        Schema::create('kematian', function (Blueprint $table) {
        $table->id('id_kematian');
        $table->unsignedBigInteger('warga_id');
        $table->string('hari');
        $table->string('tanggal');
        $table->string('pukul');
        $table->string('sebab_kematian');
        $table->string('tempat_kematian');
        $table->timestamps();

        $table->foreign('warga_id')->references('warga_id')->on('m_warga')->onDelete('cascade');
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