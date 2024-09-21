<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pengajuan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pengguna')->constrained('users');
            $table->string('jenis_layanan');
            $table->string('status');
            $table->date('tanggal_pengajuan');
            $table->string('nomor_referensi')->unique();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pengajuan');
    }
};
