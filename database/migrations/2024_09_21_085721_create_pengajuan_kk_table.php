<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pengajuan_kk', function (Blueprint $table) {
            $table->foreignId('id_pengajuan')->constrained('pengajuan');
            $table->string('nama_lengkap');
            $table->string('alamat');
            $table->string('gambar_ktp');
            $table->string('gambar_surat_nikah');
            $table->string('gambar_formulir');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pengajuan_kk');
    }
};
