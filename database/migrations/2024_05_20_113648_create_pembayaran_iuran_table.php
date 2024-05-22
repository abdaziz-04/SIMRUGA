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
        Schema::create('pembayaran_iuran', function (Blueprint $table) {
            $table->id('id_pembayaran');
            $table->unsignedInteger('id_warga');
            $table->unsignedInteger('id_iuran');
            $table->date('tanggal_pembayaran');
            $table->integer('jumlah_pembayaran');
            // Define foreign key constraints
            $table->foreign('id_warga')->references('id_warga')->on('warga')->onDelete('cascade');
            $table->foreign('id_iuran')->references('id_iuran')->on('jenis_iuran')->onDelete('cascade');
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
        Schema::dropIfExists('pembayaran_iuran');
    }
};
