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
            $table->id();
            $table->string('nama_lembaga');
            $table->string('kontak_lembaga', 255);
            $table->text('deskripsi_lembaga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lembaga_pendukung');
    }
};