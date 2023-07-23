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
        Schema::create('kacas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jenis_id');
            $table->string('nama');
            $table->unsignedBigInteger('ketebalan_id')->default(5.5);
            $table->unsignedBigInteger('bahan_id')->nullable();
            $table->unsignedBigInteger('impor_ekspor_id')->nullable();
            $table->integer('stok');
            $table->integer('harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kacas');
    }
};