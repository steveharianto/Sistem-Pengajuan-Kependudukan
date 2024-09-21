<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pengajuan_ktp', function (Blueprint $table) {
            $table->foreignId('id_pengajuan')->constrained('pengajuan');
            $table->string('nik');
            $table->string('nama_lengkap');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('alamat');
            $table->date('tanggal_perekaman');
            $table->string('gambar_kk');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pengajuan_ktp');
    }
};
