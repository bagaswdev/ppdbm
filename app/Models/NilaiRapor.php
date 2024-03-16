<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiRapor extends Model
{
    use HasFactory;

    protected $table = 'nilai_rapor';

    public function relasi_ke_data_pendaftar(){

        return $this->hasOne(DataPendaftar::class);
    }
}
