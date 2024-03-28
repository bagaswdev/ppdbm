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
            $table->string('tb_data_siswa_id');
            $table->string('tb_data_user_id')->nullable()->default(null);
            $table->string('tb_data_siswa_no_peserta')->nullable();
            $table->string('tb_data_siswa_nama')->nullable()->default(null);
            $table->string('tb_data_siswa_nik', 20)->nullable()->default(null);
            $table->string('tb_data_siswa_nisn', 20)->nullable()->default(null);
            $table->string('tb_data_siswa_sekolah_asal')->nullable()->default(null);
            $table->string('tb_data_siswa_jenis_kelamin')->nullable()->default(null);
            $table->string('tb_data_siswa_tempat_lahir')->nullable()->default(null);
            $table->date('tb_data_siswa_tanggal_lahir')->nullable()->default(null);
            $table->string('tb_data_siswa_agama', 20)->nullable()->default(null);
            $table->string('tb_data_siswa_alamat')->nullable()->default(null);
            $table->string('tb_data_siswa_wa', 15)->nullable()->default(null);
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
