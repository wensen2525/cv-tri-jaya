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
            $table->foreign('jenis_id')
            ->references('id')
            ->on('jenis')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('nama');
            $table->string('ketebalan')->nullable();
            $table->integer('stok')->nullable();
            $table->integer('harga')->nullable();
            $table->string('image')->nullable();
            $table->boolean('active')->default(true);
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
