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
        Schema::create('bansos', function (Blueprint $table) {
            $table->id('id_bansos');
            $table->unsignedBigInteger('warga_id');
            $table->foreign('warga_id')->references('warga_id')->on('m_warga')->onDelete('cascade'); // Mengacu pada kolom 'warga_id' di tabel 'm_warga'
            $table->string('jenis_bantuan');
            $table->integer('jumlah_bantuan')->nullable();
            $table->date('tanggal_distribusi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bansos');
    }
};
