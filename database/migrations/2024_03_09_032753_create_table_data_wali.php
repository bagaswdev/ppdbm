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
        Schema::create('table_data_wali', function (Blueprint $table) {
            $table->id('tb_data_wali_id');
            $table->string('tb_data_wali_nama');
            $table->string('tb_data_wali_nik', 20);
            $table->string('tb_data_wali_no_kk', 20);
            $table->string('tb_data_wali_status');
            $table->string('tb_data_wali_hubungan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_data_wali');
    }
};
