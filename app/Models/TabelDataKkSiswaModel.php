<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelDataKkSiswaModel extends Model
{
    use HasFactory;

    protected $table = "table_data_kk_siswa";

    protected $fillable = [
        'tb_data_kk_siswa_id',
        'tb_data_siswa_id',
        'tb_data_kk_siswa_file',
        'tb_data_kk_siswa_status',
    ];
}
