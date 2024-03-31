<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelDataRaportModel extends Model
{
    use HasFactory;

    protected $table = "table_data_raport";
    protected $primaryKey = 'tb_data_raport_id';

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
        'tb_data_raport_alasan',
        'tb_data_user_verifikator_id',
    ];

    public function fk_dari_table_data_siswa()
    {
        return $this->belongsTo(TabelDataSiswaModel::class, 'tb_data_siswa_id');
    }

    public function fk_dari_table_data_user_verifikator()
    {
        return $this->belongsTo(TabelDataUserVerifikatorModel::class, 'tb_data_user_verifikator_id');
    }
}
