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
        Schema::create('pengeluaran_keuangan', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_pengeluaran');
            $table->date('tanggal');
            $table->string('jumlah_pengeluaran');
            $table->string('foto_struk')->nullable();
            $table->string('keterangan')->nullable(); // keterangan bisa kosong
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengeluaran_keuangan');
    }
};
