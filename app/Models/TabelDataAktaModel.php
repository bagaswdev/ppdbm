<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelDataAktaModel extends Model
{
    use HasFactory;

    protected $table = "table_data_akta";

    protected $fillable = [
        'tb_data_akta_id',
        'tb_data_siswa_id',
        'tb_data_akta_file',
        'tb_data_akta_status',
    ];
}
