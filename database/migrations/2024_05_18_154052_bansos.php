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
        if (!Schema::hasTable('bansos')) {
            Schema::create('bansos', function (Blueprint $table) {
                $table->id('id_bansos');
                $table->unsignedBigInteger('warga_id');
                $table->string('jenis_bantuan', 255);
                $table->integer('jumlah_bantuan')->nullable();
                $table->date('tanggal_distribusi')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bansos');
    }
};
