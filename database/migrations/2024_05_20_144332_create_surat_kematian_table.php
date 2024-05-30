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
            $table->id();
            $table->foreignId('id_warga')->references('id')->on('warga')->onDelete('cascade');
            $table->dateTime('waktu_kematian');
            $table->string('sebab_kematian');
            $table->string('tempat_kematian');
            $table->timestamps();

            // Menambahkan constraint foreign key

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
