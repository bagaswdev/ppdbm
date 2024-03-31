<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelDataNisnModel extends Model
{
    use HasFactory;

    protected $table = "table_data_nisn";
    protected $primaryKey = 'tb_data_nisn_id';

    protected $fillable = [
        'tb_data_nisn_id',
        'tb_data_siswa_id',
        'tb_data_user_verifikasi_id',
        'tb_data_nisn_file',
        'tb_data_nisn_status',
        'tb_data_nisn_alasan',
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
