<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelDataSiswaModel extends Model
{
    use HasFactory;

    protected $table = "table_data_siswa";

    protected $fillable = [
        'tb_data_user_id',
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
}
