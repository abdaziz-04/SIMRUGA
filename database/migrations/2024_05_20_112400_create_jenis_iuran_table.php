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
        Schema::create('jenis_iuran', function (Blueprint $table) {
            $table->increments('id_iuran');
            $table->string('nama_iuran', 255);
            $table->string('jumlah_iuran', 255);
            // Add foreign key reference to warga table
            $table->unsignedInteger('id_warga');
            $table->foreign('id_warga')->references('id_warga')->on('warga')->onDelete('cascade');
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
        Schema::dropIfExists('jenis_iuran');
    }
};