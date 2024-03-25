<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelDataNisnModel extends Model
{
    use HasFactory;

    protected $table = "table_data_nisn";

    protected $fillable = [
        'tb_data_nisn_id',
        'tb_data_siswa_id',
        'tb_data_nisn_file',
        'tb_data_nisn_status',
    ];
}
