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
        Schema::create('m_kegiatan',function(Blueprint $table){
        $table->id('kegiatan_id');
        $table->string('nama_kegiatan', 100);
        $table->date('tanggal_kegiatan');
        $table->text('desc_kegiatan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_kegiatan');
    }
};
