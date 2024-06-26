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
        Schema::create('table_ibu_verif', function (Blueprint $table) {
            $table->id('tb_data_ibu_verif_id');
            $table->string('tb_data_siswa_id')->nullable()->default(null);
            $table->string('tb_data_ibu_verif_nama')->nullable()->default(null);
            $table->string('tb_data_ibu_verif_pekerjaan', 100)->nullable()->default(null);
            $table->string('tb_data_ibu_verif_agama', 20)->nullable()->default(null);
            $table->string('tb_data_ibu_verif_status')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_ibu_verif');
    }
};
