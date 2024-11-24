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
        Schema::create('aturans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('gejala_id');
            $table->foreignId('tingkatstres_id');
            $table->decimal('bobot', total:5, places:2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aturans');
    }
};
