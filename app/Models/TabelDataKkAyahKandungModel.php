<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelDataKkAyahKandungModel extends Model
{
    use HasFactory;

    protected $table = "table_data_kk_ayah_kandung";

    protected $fillable = [
        'tb_data_kk_ayah_kandung_id',
        'tb_data_siswa_id',
        'tb_data_kk_ayah_kandung_file',
        'tb_data_kk_ayah_kandung_status',
    ];
}
