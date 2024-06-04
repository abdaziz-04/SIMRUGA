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
        Schema::create('warga', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_kk')->constrained('kartu_keluarga')->onDelete('cascade');
            $table->foreignId('id_rt')->constrained('rt');
            $table->string('nama_warga', 255);
            $table->string('alamat', 255);
            $table->string('no_telepon', 25);
            $table->string('NIK', 25);
            $table->date('tanggal_lahir');
            $table->char('jenis_kelamin', 1);
            $table->string('pekerjaan', 255)->nullable();
            $table->string('foto_warga')->nullable();
            $table->string('jenis_warga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_warga');
    }
};
