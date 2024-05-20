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
        Schema::create('iuran_warga', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('warga_id')->index();
            $table->unsignedBigInteger('iuran_id')->index();
            $table->date('tanggal_bayar');
            $table->decimal('jumlah', 15, 2);
            $table->string('keterangan')->nullable();
            $table->timestamps();

            $table->foreign('warga_id')->references('warga_id')->on('m_warga')->onDelete('cascade');
            $table->foreign('iuran_id')->references('iuran_id')->on('jenis_iuran')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('iuran_warga');
    }
};
