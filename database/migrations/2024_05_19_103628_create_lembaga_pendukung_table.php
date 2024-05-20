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
        Schema::create('lembaga_pendukung', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('pelaporan_warga_id')->index();
            $table->string('nama_lembaga', 255);
            $table->string('kontak_lembaga', 255);
            $table->text('alamat_lembaga');
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('pelaporan_warga_id')->references('id')->on('pelaporan_warga')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lembaga_pendukung');
    }
};
