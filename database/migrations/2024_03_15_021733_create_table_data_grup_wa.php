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
        Schema::create('table_data_grup_wa', function (Blueprint $table) {
            $table->id('tb_data_grup_wa_id');
            $table->bigInteger('tb_data_siswa_id');
            $table->string('tb_data_grup_wa_file');
            $table->string('tb_data_grup_wa_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_data_grup_wa');
    }
};
