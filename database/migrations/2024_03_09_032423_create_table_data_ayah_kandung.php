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
        Schema::create('table_data_ayah_kandung', function (Blueprint $table) {
            $table->id('tb_data_ayah_kandung_id');
            $table->string('tb_data_ayah_kandung_nama');
            $table->string('tb_data_ayah_kandung_nik', 20);
            $table->string('tb_data_ayah_kandung_no_kk', 20);
            $table->string('tb_data_ayah_kandung_status');
            $table->string('tb_data_ayah_kandung_hubungan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_data_ayah_kandung');
    }
};
