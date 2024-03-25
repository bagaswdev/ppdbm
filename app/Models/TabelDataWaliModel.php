<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelDataWaliModel extends Model
{
    use HasFactory;

    protected $table = "table_data_wali";

    protected $fillable = [
        'tb_data_wali_id',
        'tb_data_wali_nama',
        'tb_data_wali_nik',
        'tb_data_wali_no_kk',
        'tb_data_wali_status',
        'tb_data_wali_hubungan',
    ];
}
