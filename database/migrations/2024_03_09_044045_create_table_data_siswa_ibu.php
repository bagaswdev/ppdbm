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
        Schema::create('table_data_siswa_ibu', function (Blueprint $table) {
            $table->id('tb_data_siswa_ibu_id');
            $table->bigInteger('tb_data_ibu_kandung_id');
            $table->bigInteger('tb_data_siswa_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_data_siswa_ibu');
    }
};
