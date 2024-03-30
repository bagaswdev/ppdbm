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
            $table->string('tb_data_wali_nama')->nullable()->default(null);
            $table->string('tb_data_wali_pekerjaan', 100)->nullable()->default(null);
            $table->string('tb_data_wali_agama', 20)->nullable()->default(null);
            $table->string('tb_data_wali_status')->nullable()->default(null);
            $table->string('tb_data_wali_hubungan')->nullable()->default(null);
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
