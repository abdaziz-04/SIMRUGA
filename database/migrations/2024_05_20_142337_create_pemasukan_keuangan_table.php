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
        Schema::create('pemasukan_keuangan', function (Blueprint $table) {
            $table->increments('id_pemasukan');
            $table->string('jenis_pemasukan');
            $table->date('tanggal');
            $table->string('jumlah_pemasukan');
            $table->string('keterangan')->nullable(); // keterangan bisa kosong
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemasukan_keuangan');
    }
};
