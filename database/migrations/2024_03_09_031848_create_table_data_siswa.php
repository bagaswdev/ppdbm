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
        Schema::create('table_data_siswa', function (Blueprint $table) {
            $table->id('tb_data_siswa_id');
            $table->bigInteger('tb_data_user_id');
            $table->string('tb_data_siswa_nik', 20);
            $table->string('tb_data_siswa_nama');
            $table->string('tb_data_siswa_nisn', 20);
            $table->string('tb_data_siswa_no_kk', 20);
            $table->string('tb_data_siswa_sekolah_asal');
            $table->string('tb_data_siswa_alamat_sekolah_asal');
            $table->string('tb_data_siswa_jenis_kelamin');
            $table->string('tb_data_siswa_tempat_lahir');
            $table->date('tb_data_siswa_tanggal_lahir');
            $table->string('tb_data_siswa_alamat');
            $table->string('tb_data_siswa_wa',15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_data_siswa');
    }
};
