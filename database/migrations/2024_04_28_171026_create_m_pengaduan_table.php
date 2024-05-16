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
        Schema::create('m_pengaduan', function (Blueprint $table) {
            $table->bigIncrements('pengaduan_id');
            $table->date('tanggal_pengaduan');
            $table->text('isi_pengaduan');
            $table->string('status', 10);
            $table->string('petugas', 100);
            $table->text('catatan_petugas');
            $table->timestamps();
        
            
        });
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_pengaduan');
    }
};
