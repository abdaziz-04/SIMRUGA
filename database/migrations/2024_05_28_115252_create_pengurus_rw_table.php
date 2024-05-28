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
        Schema::create('pengurus_RW', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_warga'); // Menggunakan unsignedInteger()
            $table->string('nama_pengurus');
            $table->string('jabatan');
            $table->string('no_telepon');
            $table->timestamps();

            // Menambahkan constraint foreign key
            $table->foreign('id_warga')->references('id')->on('warga')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengurus_RW');
    }
};