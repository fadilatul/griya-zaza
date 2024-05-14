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
        Schema::create('anamnese', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pasien_id');
            $table->date('tanggal_masuk');
            $table->unsignedBigInteger('poli_id');
            $table->string('tekanan_darah');
            $table->string('suhu_tubuh');
            $table->string('gejala');
            $table->unsignedBigInteger('diagnosa_id');
            $table->string('terapi');
            $table->timestamps();

            $table->foreign('poli_id')->references('id')->on('poli')->onDelete('cascade');
            $table->foreign('pasien_id')->references('id')->on('pendaftaran')->onDelete('cascade');
            $table->foreign('diagnosa_id')->references('id')->on('diagnosa')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anamnese');
    }
};
