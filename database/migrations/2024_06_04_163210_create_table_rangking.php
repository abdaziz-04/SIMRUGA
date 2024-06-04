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
        Schema::create('rangking', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_warga')->nullable();
            $table->unsignedBigInteger('alternatif_id');
            $table->float('moora_value');
            $table->integer('rangking');
            $table->timestamps();

            $table->foreign('id_warga')->references('id')->on('warga')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rangking');
    }
};
