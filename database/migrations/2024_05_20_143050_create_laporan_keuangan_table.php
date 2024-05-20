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
        Schema::create('laporan_keuangan', function (Blueprint $table) {
            $table->increments('id_laporan_keuangan');
            $table->unsignedInteger('id_pemasukan'); // relasi ke tabel pemasukan
            $table->unsignedInteger('id_pengeluaran'); // relasi ke tabel pengeluaran
            $table->string('total_saldo');
            
            $table->timestamps();

            // Menambahkan constraint foreign key
            $table->foreign('id_pemasukan')->references('id_pemasukan')->on('pemasukan_keuangan')->onDelete('cascade');
            $table->foreign('id_pengeluaran')->references('id_pengeluaran')->on('pengeluaran_keuangan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laporan_keuangan');
    }
};