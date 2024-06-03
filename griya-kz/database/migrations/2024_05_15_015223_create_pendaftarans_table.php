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
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('tanggal_lahir');
            $table->integer('usia');
            $table->enum('keterangan', ['belumkawin', 'kawin'])->nullable();
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->string('nomer_hp')->nullable();
            $table->string('alamat');
            $table->enum('kategori', ['umum', 'bpjs']);
            $table->unsignedBigInteger('khitan_id')->nullable();
            $table->timestamps();

            $table->foreign('khitan_id')->references('id')->on('khitans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};
