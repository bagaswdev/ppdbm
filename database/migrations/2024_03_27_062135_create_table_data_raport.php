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
            $table->bigInteger('data_siswa_id')->nullable()->default(null);
            $table->bigInteger('tb_data_user_verifikator_id')->nullable()->default(null);
            $table->float('tb_data_raport_mtk5_smt1')->nullable()->default(null);
            $table->float('tb_data_raport_ipa5_smt1')->nullable()->default(null);
            $table->float('tb_data_raport_indo5_smt1')->nullable()->default(null);
            $table->float('tb_data_raport_mtk5_smt2')->nullable()->default(null);
            $table->float('tb_data_raport_ipa5_smt2')->nullable()->default(null);
            $table->float('tb_data_raport_indo5_smt2')->nullable()->default(null);
            $table->float('tb_data_raport_mtk6_smt1')->nullable()->default(null);
            $table->float('tb_data_raport_ipa6_smt1')->nullable()->default(null);
            $table->float('tb_data_raport_indo6_smt1')->nullable()->default(null);
            $table->string('tb_data_raport_file')->nullable()->default(null);
            $table->string('tb_data_raport_status')->nullable()->default(null);
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
