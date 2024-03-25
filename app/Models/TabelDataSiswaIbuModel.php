<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelDataSiswaIbuModel extends Model
{
    use HasFactory;

    protected $table = "table_data_siswa_ibu";

    protected $fillable = [
        'tb_data_siswa_ibu_id',
        'tb_data_ibu_kandung_id',
        'tb_data_siswa_id',
    ];
}
