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
        Schema::create('kegiatan_RW', function (Blueprint $table) {
            $table->increments('id_kegiatan');
            $table->unsignedInteger('id_pengurus'); // relasi ke tabel pengurus_RW
            $table->string('nama_kegiatan');
            $table->date('tanggal_kegiatan');
            $table->string('waktu_kegiatan');
            $table->string('tempat_kegiatan');
            $table->text('deskripsi_kegiatan');
            $table->string('foto_kegiatan')->nullable(); // disini saya set nullable karena foto mungkin tidak selalu ada
            $table->timestamps();

            // Menambahkan constraint foreign key
            
            $table->foreign('id_pengurus')->references('id_pengurus')->on('pengurus_RW')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kegiatan__RW');
    }
};
