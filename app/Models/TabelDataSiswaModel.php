<?php

namespace App\Models;

use App\Models\TabelDataKipModel;
use App\Models\TabelDataFotoModel;
use App\Models\TabelDataGrupWaModel;
use App\Models\TabelDataAktaModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TabelDataSiswaModel extends Model
{
    use HasFactory;

    protected $table = "table_data_siswa";
    protected $primaryKey = 'tb_data_siswa_id';

    protected $fillable = [
        'tb_data_siswa_id',
        'tb_data_siswa_nik',
        'tb_data_siswa_nama',
        'tb_data_siswa_nisn',
        'tb_data_siswa_no_kk',
        'tb_data_siswa_sekolah_asal',
        'tb_data_siswa_alamat_sekolah_asal',
        'tb_data_siswa_jenis_kelamin',
        'tb_data_siswa_tempat_lahir',
        'tb_data_siswa_tanggal_lahir',
        'tb_data_siswa_alamat',
        'tb_data_siswa_wa',
    ];

    // Relasi ke table_data_grup_wa
    public function relasi_ke_table_data_grup_wa()
    {
        return $this->hasOne(TabelDataGrupWaModel::class, 'tb_data_siswa_id');
    }

    public function relasi_ke_table_data_akta()
    {
        return $this->hasOne(TabelDataAktaModel::class, 'tb_data_siswa_id');
    }

    public function relasi_ke_table_ayah_verif()
    {
        return $this->hasOne(TabelDataAyahVerif::class, 'tb_data_siswa_id');
    }

    public function relasi_ke_table_ibu_verif()
    {
        return $this->hasOne(TabelDataIbuVerif::class, 'tb_data_siswa_id');
    }

    // Relasi ke table_data_foto
    public function foto()
    {
        return $this->hasOne(TabelDataFotoModel::class, 'tb_data_siswa_id');
    }

    // Relasi ke table_data_kip
    public function kip()
    {
        return $this->hasOne(TabelDataKipModel::class, 'tb_data_siswa_id');
    }

    public function relasi_ke_table_nisn()
    {
        return $this->hasOne(TabelDataNisnModel::class, 'tb_data_siswa_id');
    }

    public function relasi_ke_table_keabsahan()
    {
        return $this->hasOne(TabelDataKeabsahanModel::class, 'tb_data_siswa_id');
    }

    public function relasi_ke_table_kelakuan()
    {
        return $this->hasOne(TabelDataKelakuanBaikModel::class, 'tb_data_siswa_id');
    }

    public function relasi_ke_table_kk()
    {
        return $this->hasOne(TabelDataKkSiswaModel::class, 'tb_data_siswa_id');
    }

    public function relasi_ke_table_rekap()
    {
        return $this->hasOne(TabelDataRaportModel::class, 'tb_data_siswa_id');
    }
}
