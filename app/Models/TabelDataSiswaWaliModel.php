<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelDataSiswaWaliModel extends Model
{
    use HasFactory;

    protected $table = "table_data_siswa_wali";

    protected $fillabel = [
        'tb_data_siswa_wali_id',
        'tb_data_wali_id',
        'tb_data_siswa_id',
    ];
}
