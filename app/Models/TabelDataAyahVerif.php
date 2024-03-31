<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelDataAyahVerif extends Model
{
    use HasFactory;

    protected $table = "table_ayah_verif";
    protected $primaryKey = 'tb_data_ayah_verif_id';

    protected $fillable = [
        'tb_data_ayah_verif_id',
        'tb_data_siswa_id',
        'tb_data_ayah_verif_nama',
        'tb_data_ayah_verif_pekerjaan',
        'tb_data_ayah_verif_agama',
        'tb_data_ayah_verif_status',
    ];

    public function fk_dari_table_data_siswa()
    {
        return $this->belongsTo(TabelDataSiswaModel::class, 'tb_data_siswa_id');
    }
}
