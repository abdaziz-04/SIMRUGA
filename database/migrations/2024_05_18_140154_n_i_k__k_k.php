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
        Schema::create('surat_pengantar', function (Blueprint $table) {
            $table->id('id_surat_pengantar');
            $table->unsignedBigInteger('id_NIK_KK');
            $table->string('alamat');
            $table->string('NIK_KK');

            $table->foreign('alamat')->references('alamat')->on('m_warga')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
