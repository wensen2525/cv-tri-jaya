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
        Schema::create('proyeks', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('maps_image')->nullable();
            $table->string('maps_link')->nullable();
            $table->string('nama_kontak_1')->nullable();
            $table->string('nomor_kontak_1')->nullable();
            $table->string('nama_kontak_2')->nullable();
            $table->string('nomor_kontak_2')->nullable();
            $table->string('bidang')->nullable();
            $table->string('description')->nullable();
            $table->year('first_year')->nullable();
            $table->string('gedung_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyeks');
    }
};
