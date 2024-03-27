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
            $table->string('tb_data_user_id')->nullable()->default(null);
            $table->string('tb_data_ayah_kandung_nama')->nullable()->default(null);
            $table->string('tb_data_ayah_kandung_pekerjaan', 100)->nullable()->default(null);
            $table->string('tb_data_ayah_kandung_agama', 20)->nullable()->default(null);
            $table->string('tb_data_ayah_kandung_status')->nullable()->default(null);
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
