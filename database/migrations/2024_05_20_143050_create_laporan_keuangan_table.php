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
            $table->id();
            // $table->unsignedInteger('id_pemasukan'); // relasi ke tabel pemasukan
            // $table->unsignedInteger('id_pengeluaran'); // relasi ke tabel pengeluaran
            $table->string('total_saldo');
            $table->foreignId('id_pemasukan')->nullable()->constrained('pemasukan_keuangan', 'id')->onDelete('cascade');
            $table->foreignId('id_pengeluaran')->nullable()->constrained('pengeluaran_keuangan', 'id')->onDelete('cascade');

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
        Schema::dropIfExists('laporan_keuangan');
    }
};