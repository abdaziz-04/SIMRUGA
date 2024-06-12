<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rt_id')->nullable();
            $table->unsignedBigInteger('warga_id')->nullable();
            $table->string('username')->unique();
            $table->string('name');
            $table->string('password');

            $table->timestamps();

            $table->foreign('rt_id')->references('id')->on('rt')->onDelete('set null');
            $table->foreign('warga_id')->references('id')->on('warga')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
