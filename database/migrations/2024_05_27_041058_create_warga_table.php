<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWargaTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('warga', function (Blueprint $table) {
            $table->id();
            $table->string('nama_warga');
            $table->integer('id_kk');
            $table->integer('id_rt');
            $table->string('alamat');
            $table->string('no_telepon');
            $table->string('email')->unique();
            $table->string('NIK')->unique();
            $table->date('tanggal_lahir');
            $table->char('jenis_kelamin', 1);
            $table->string('status_kawin');
            $table->string('pekerjaan');
            $table->string('foto_warga');
            $table->string('transportasi');
            $table->string('status_kepemilikan_rumah');
            $table->string('sumber_air_bersih');
            $table->string('token_listrik');
            $table->integer('luas_bangunan');
            $table->decimal('pengeluaran_bulanan', 15, 2);
            $table->integer('jumlah_anggota_keluarga');
            $table->decimal('penghasilan', 15, 2);
            $table->integer('tanggungan');
            $table->string('jenis_warga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('warga');
    }
}
