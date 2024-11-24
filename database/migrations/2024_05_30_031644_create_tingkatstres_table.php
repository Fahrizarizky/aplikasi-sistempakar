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
        Schema::create('tingkatstres', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('nama_tingkatstres');
            $table->string('kode_tingkatstres');
            $table->text('solusi_stres');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tingkatstres');
    }
};
