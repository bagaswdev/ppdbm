<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelDataStatusSiswaModel extends Model
{
    use HasFactory;

    protected $table = "table_data_status_siswa";

    protected $fillable = [
        'tb_data_status_siswa_id',
        'tb_data_siswa_id',
        'tb_data_jalur_id',
        'tb_data_status_siswa_status',
    ];
}
