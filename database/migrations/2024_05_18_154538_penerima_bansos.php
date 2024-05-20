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
        if (!Schema::hasTable('PenerimaBansos')) {
            Schema::create('PenerimaBansos', function (Blueprint $table) {
                $table->id('warga_id');
                $table->unsignedBigInteger('rt_id');
                $table->string('gaji', 255);
                $table->string('tanggungan', 255);
                $table->string('tanggal_lahir', 255);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('PenerimaBansos');
    }
};
