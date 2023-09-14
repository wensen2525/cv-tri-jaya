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
        Schema::create('cabangs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('alamat')->nullable();
            $table->string('nama_kontak_1')->nullable();
            $table->string('nomor_kontak_1')->nullable();
            $table->string('nama_kontak_2')->nullable();
            $table->string('nomor_kontak_2')->nullable();
            $table->string('nama_kontak_3')->nullable();
            $table->string('nomor_kontak_3')->nullable();
            $table->string('gedung_image')->nullable();
            $table->boolean('apakahCabangUtama')->nullable()->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cabangs');
    }
};
