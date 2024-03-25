<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelDataKkIbuKandungModel extends Model
{
    use HasFactory;

    protected $table = "table_data_kk_ibu_kandung";

    protected $fillable = [
        'tb_data_kk_ibu_kandung_id',
        'tb_data_siswa_id',
        'tb_data_kk_ibu_kandung_file',
        'tb_data_kk_ibu_kandung_status',
    ];
}
