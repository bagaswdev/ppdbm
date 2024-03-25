<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelDataIbuKandungModel extends Model
{
    use HasFactory;

    protected $table = "table_data_ibu_kandung";

    protected $fillable = [
        'tb_data_ibu_kandung_id',
        'tb_data_ibu_kandung_nama',
        'tb_data_ibu_kandung_nik',
        'tb_data_ibu_kandung_no_kk',
        'tb_data_ibu_kandung_status',
        'tb_data_ibu_kandung_hubungan',
    ];
}
