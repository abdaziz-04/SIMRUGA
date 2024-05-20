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
        Schema::create('pelaporan_warga', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('warga_id')->index();
            $table->string('jenis_pelaporan', 255);
            $table->text('keterangan');
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('warga_id')->references('warga_id')->on('m_warga')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelaporan_warga');
    }
};
