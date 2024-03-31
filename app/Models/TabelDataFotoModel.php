<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelDataFotoModel extends Model
{
    use HasFactory;

    protected $table = "table_data_foto";
    protected $primaryKey = 'tb_data_foto_id';

    protected $fillable = [
        'tb_data_foto_id',
        'tb_data_siswa_id',
        'tb_data_user_verifikasi_id',
        'tb_data_foto_file',
        'tb_data_foto_status',
        'tb_data_foto_alasan',
    ];

    public function siswa()
    {
        return $this->belongsTo(TabelDataSiswaModel::class, 'tb_data_siswa_id');
    }

    public function fk_dari_table_data_user_verifikator()
    {
        return $this->belongsTo(TabelDataUserVerifikatorModel::class, 'tb_data_user_verifikator_id');
    }
}
