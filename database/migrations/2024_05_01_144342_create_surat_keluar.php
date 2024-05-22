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
        Schema::create('surat_keluar', function (Blueprint $table) {
            $table->id();
            $table->string('no_agenda');
            $table->string('buku_agenda');
            $table->date('tanggal_keluar');
            $table->string('no_surat');
            $table->date('tanggal_surat');
            $table->string('jenis_surat');
            $table->string('tujuan_surat');
            $table->string('klasifikasi');
            $table->string('perihal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_keluar');
    }
};
