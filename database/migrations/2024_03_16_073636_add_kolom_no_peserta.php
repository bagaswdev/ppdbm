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
        Schema::table('table_data_siswa', function (Blueprint $table) {
            $table->string('tb_data_siswa_no_peserta')->nullable()->after('tb_data_user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('table_data_siswa', function (Blueprint $table) {
            $table->dropColumn('tb_data_siswa_no_peserta');
        });
    }
};
