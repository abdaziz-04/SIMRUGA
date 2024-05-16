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
        Schema::create('m_arsipansurat', function (Blueprint $table) {
            $table->id('arsipan_surat_id');
            $table->string('nomor_surat', 50)->unique();
            $table->date('tanggal_surat');
            $table->string('perihal', 255);
            $table->string('foto_surat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_arsipansurat');
    }
};
