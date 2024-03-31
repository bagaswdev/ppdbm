<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TabelDataUserVerifikatorModel;

class TabelDataAktaModel extends Model
{
    use HasFactory;

    protected $table = "table_data_akta";
    protected $primaryKey = 'tb_data_akta_id';

    protected $fillable = [
        'tb_data_akta_id',
        'tb_data_siswa_id',
        'tb_data_user_verifikator_id',
        'tb_data_akta_file',
        'tb_data_akta_status',
        'tb_data_akta_alasan',
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
