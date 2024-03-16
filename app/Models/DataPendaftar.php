<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPendaftar extends Model
{
    use HasFactory;
    protected $table = 'data_pendaftar';

    public function relasi_data_ayah()
    {
        return $this->belongsTo(DataAyah::class, 'no_pendaftaran', 'no_pendaftaran');
    }

    public function relasi_data_ibu()
    {

        return $this->belongsTo(DataIbu::class, 'no_pendaftaran', 'no_pendaftaran');
    }

    public function relasi_nilai_rapor()
    {

        return $this->belongsTo(NilaiRapor::class, 'no_pendaftaran', 'no_pendaftaran');
    }

    public function relasi_berkas_prestasi()
    {

        return $this->belongsTo(BerkasPrestasi::class, 'no_pendaftaran', 'no_pendaftaran');
    }

    public function relasi_link_berkas()
    {

        return $this->belongsTo(LinkBerkas::class, 'no_pendaftaran', 'no_pendaftaran');
    }

    public function relasi_ke_verifikasi()
    {
        return $this->belongsTo(Verifikasi::class, 'no_pendaftaran', 'no_pendaftaran');
    }
}
