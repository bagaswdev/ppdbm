<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelDataKeabsahanModel extends Model
{
    use HasFactory;

    protected $table = "table_data_keabsahan";

    protected $fillable = [
        'tb_data_keabsahan_id',
        'tb_data_siswa_id',
        'tb_data_keabsahan_file',
        'tb_data_keabsahan_status',
    ];
}
