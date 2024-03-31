<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\TabelDataUserVerifikatorModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TabelDataGrupWaModel extends Model
{
    use HasFactory;

    protected $table = "table_data_grup_wa";
    protected $primaryKey = 'tb_data_grup_wa_id';

    protected $fillable = [
        'tb_data_grup_wa_id',
        'tb_data_siswa_id',
        'tb_data_user_verifikator_id',
        'tb_data_grup_wa_file',
        'tb_data_grup_wa_status',
        'tb_data_grup_wa_alasan',
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
