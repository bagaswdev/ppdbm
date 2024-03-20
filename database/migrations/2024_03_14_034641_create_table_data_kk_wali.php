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
        Schema::create('table_data_kk_wali', function (Blueprint $table) {
            $table->id('tb_data_kk_wali_id');
            $table->bigInteger('tb_data_siswa_id')->nullable()->default(null);
            $table->string('tb_data_kk_wali_file')->nullable()->default(null);
            $table->string('tb_data_kk_wali_status')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_data_kk_wali');
    }
};
