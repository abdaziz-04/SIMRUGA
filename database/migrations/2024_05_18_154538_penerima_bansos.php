<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('PenerimaBansos', function (Blueprint $table) {
            $table->id('warga_id');
            $table->unsignedBigInteger('rt_id')->index();
            $table->string('gaji');
            $table->string('tanggungan');
            $table->string('tanggal_lahir');
            $table->timestamps();

            // Define foreign key constraint
            $table->foreign('warga_id')->references('warga_id')->on('m_warga');
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
