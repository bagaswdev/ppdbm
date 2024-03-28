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
        Schema::table('table_data_kelakuan_baik', function (Blueprint $table) {
            $table->string('tb_data_kelakuan_baik_alasan')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('table_data_kelakuan_baik', function (Blueprint $table) {
            //
        });
    }
};
