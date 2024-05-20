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
        Schema::create('penerima_bansos', function (Blueprint $table) {
            $table->id('id_warga');
            $table->unsignedBigInteger('id_rt');
            $table->string('gaji');
            $table->string('tanggungan', 255);
            $table->date('tangal_lahir');
            $table->timestamps();

            // Add foreign key constraint
            $table->foreign('id_rt')->references('id')->on('rt')->onDelete('cascade');
        });
    }


public function down()
{
    Schema::dropIfExists('penerima_bansos');
}
};