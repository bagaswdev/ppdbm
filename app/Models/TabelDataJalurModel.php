<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelDataJalurModel extends Model
{
    use HasFactory;

    protected $table = "table_data_jalur";

    protected $fillable = [
        'tb_data_jalur_id',
        'tb_data_jalur_nama',
    ];
}
