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
        Schema::create('spekteks', function (Blueprint $table) {
            $table->id();
            $table->string('lokasi');
            $table->string('kode_barang');
            $table->string('jenis_barang');
            $table->string('merk');
            $table->string('spesifikasi');
            $table->integer('jumlah');
            $table->string('satuan');
            $table->string('kondisi');
            $table->string('tahun');
            $table->string('asal');
            $table->string('gambar');
            $table->date('tanggal');
            $table->string('dokumen');
            $table->string('keterangan');
            $table->string('qr_code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spektek');
    }
};
