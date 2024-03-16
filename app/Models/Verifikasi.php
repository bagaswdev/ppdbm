<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verifikasi extends Model
{
    use HasFactory;

    protected $table = 'verifikasi';

    protected $fillable = ['id', 'id_verifikator', 'no_pendaftaran', 'cFoto', 'cAkte', 'cNisn', 'cRapot', 'cAbsah', 'cKelakuan', 'cWA', 'cParalel', 'cPrestasiUtama', 'cHafal', 'cKIP', 'cRata', 'cPrestasi1', 'cPrestasi2', 'cVerifikasi', 'catatan', 'status'];


    public function relasi_ke_data_pendaftar()
    {

        return $this->hasOne(DataPendaftar::class);
    }

    public function relasi_ke_user()
    {
        return $this->hasOne(Verifikasi::class);
    }
}
