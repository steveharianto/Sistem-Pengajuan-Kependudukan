<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pengajuan_akta_kelahiran', function (Blueprint $table) {
            $table->foreignId('id_pengajuan')->constrained('pengajuan');
            $table->string('nama_lengkap');
            $table->string('alamat');
            $table->string('gambar_formulir');
            $table->string('gambar_ktp_ayah');
            $table->string('gambar_ktp_ibu');
            $table->string('gambar_surat_nikah');
            $table->string('gambar_surat_keterangan_lahir');
            $table->string('gambar_kk');
            $table->string('gambar_ktp_saksi');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pengajuan_akta_kelahiran');
    }
};
