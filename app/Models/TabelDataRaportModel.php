<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelDataRaportModel extends Model
{
    use HasFactory;

    protected $table = "table_data_raport";

    protected $fillable = [
        'tb_data_raport_id',
        'tb_data_siswa_id',
        'tb_data_raport_mtk5_smt1',
        'tb_data_raport_ipa5_smt1',
        'tb_data_raport_indo5_smt1',
        'tb_data_raport_mtk5_smt2',
        'tb_data_raport_ipa5_smt2',
        'tb_data_raport_indo5_smt2',
        'tb_data_raport_mtk6_smt1',
        'tb_data_raport_ipa6_smt1',
        'tb_data_raport_indo6_smt1',
        'tb_data_raport_rata_rata',
        'tb_data_raport_file',
        'tb_data_raport_status',
    ];
}
