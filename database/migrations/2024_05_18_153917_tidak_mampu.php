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
        Schema::create('tidak_mampu', function (Blueprint $table) {
            $table->id('id_tidak_mampu');
            $table->unsignedBigInteger('warga_id');

            $table->foreign('warga_id')->references('warga_id')->on('m_warga')->onDelete('cascade');
            $table->timestamps();
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