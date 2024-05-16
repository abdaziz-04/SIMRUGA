<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('m_warga',function(Blueprint $table){
            $table->id('warga_id');
            $table->unsignedBigInteger('rt_id')->index();
            $table->string('nama',50);
            $table->string('NIK')->unique();
            $table->string('alamat',50)->unique();
            $table->string('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('pekerjaan');
            $table->timestamps();

            $table->foreign('rt_id')->references('rt_id')->on('m_r_t');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_warga');
    }
};
