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
        Schema::create('telegram_keluar', function (Blueprint $table) {
            $table->id();
            $table->string('dari');
            $table->string('kepada');
            $table->string('tembusan');
            $table->string('klasifikasi');
            $table->string('jenis_telegram');
            $table->string('no');
            $table->date('tanggal_waktu_penunjukan');
            $table->date('tanggal_waktu_pembikinan');
            $table->string('isi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('telegram_keluar');
    }
};
