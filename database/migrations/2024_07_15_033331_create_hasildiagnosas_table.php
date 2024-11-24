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
        Schema::create('hasildiagnosas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('nama_siswa');
            $table->text('gejaladialami_siswa');
            $table->text('tingkatstres_siswa');
            $table->text('persentase');
            $table->text('solusi');
            $table->text('nama_sekolah');
            $table->text('kelas');
            $table->text('jurusan');
            $table->text('email');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasildiagnosas');
    }
};
