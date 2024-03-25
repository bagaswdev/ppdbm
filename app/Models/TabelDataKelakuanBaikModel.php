<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelDataKelakuanBaikModel extends Model
{
    use HasFactory;

    protected $table = "table_data_kelakuan_baik";

    protected $fillable = [
        'tb_data_kelakuan_baik_id',
        'tb_data_siswa_id',
        'tb_data_kelakuan_baik_file',
        'tb_data_kelakuan_baik_status',
    ];
}
