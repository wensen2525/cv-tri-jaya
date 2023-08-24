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
        Schema::create('ukurans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kaca_id');
            $table->foreign('kaca_id')
            ->references('id')
            ->on('kacas')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('panjang');
            $table->string('lebar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ukurans');
    }
};
