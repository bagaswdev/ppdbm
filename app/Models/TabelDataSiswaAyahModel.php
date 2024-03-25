<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelDataSiswaAyahModel extends Model
{
    use HasFactory;

    protected $table = "table_data_siswa_ayah";

    protected $fillable = [
        'tb_data_siswa_ayah_id',
        'tb_data_ayah_kandung_id',
        'tb_data_siswa_id',
    ];
}
