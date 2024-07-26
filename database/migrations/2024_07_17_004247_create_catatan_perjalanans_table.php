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
        Schema::create('catatan_perjalanans', function (Blueprint $table) {
            $table->string('nik', 20);
            $table->date('tanggal');
            $table->time('jam');
            $table->string('lokasi_dituju', 50);
            $table->double('suhu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catatan_perjalanans');
    }
};