<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelDataAyahKandungModel extends Model
{
    use HasFactory;

    protected $table = "table_data_ayah_kandung";

    protected $fillable = [
        'tb_data_ayah_kandung_id',
        'tb_data_ayah_kandung_nama',
        'tb_data_ayah_kandung_nik',
        'tb_data_ayah_kandung_no_kk',
        'tb_data_ayah_kandung_status',
        'tb_data_ayah_kandung_hubungan',
    ];
}
