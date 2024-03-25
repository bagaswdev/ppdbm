<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelDataFotoModel extends Model
{
    use HasFactory;

    protected $table = "table_data_foto";

    protected $fillable = [
        'tb_data_foto_id',
        'tb_data_siswa_id',
        'tb_data_foto_file',
        'tb_data_foto_status',
    ];
}
