<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelDataKipModel extends Model
{
    use HasFactory;

    protected $table = "table_data_kip";

    protected $fillable = [
        'tb_data_kip_id',
        'tb_data_siswa_id',
        'tb_data_kip_file',
        'tb_data_kip_status',
    ];
}
