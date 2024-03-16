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
        Schema::create('table_data_raport', function (Blueprint $table) {
            $table->id('tb_data_raport_id');
            $table->bigInteger('data_siswa_id');
            $table->float('tb_data_raport_mtk5_smt1');
            $table->float('tb_data_raport_ipa5_smt1');
            $table->float('tb_data_raport_indo5_smt1');
            $table->float('tb_data_raport_mtk5_smt2');
            $table->float('tb_data_raport_ipa5_smt2');
            $table->float('tb_data_raport_indo5_smt2');
            $table->float('tb_data_raport_mtk6_smt1');
            $table->float('tb_data_raport_ipa6_smt1');
            $table->float('tb_data_raport_indo6_smt1');
            $table->float('tb_data_raport_rata_rata');
            $table->string('tb_data_raport_file');
            $table->string('tb_data_raport_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_data_raport');
    }
};
