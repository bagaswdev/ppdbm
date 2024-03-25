<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelDataKkWaliModel extends Model
{
    use HasFactory;

    protected $table = "table_data_kk_wali";

    protected $fillable = [
        'tb_data_kk_wali_id',
        'tb_data_siswa_id',
        'tb_data_kk_wali_file',
        'tb_data_kk_wali_status',
    ];
}
