<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BerkasPrestasi extends Model
{
    use HasFactory;

    protected $table = 'prestasi';

    public function relasi_ke_data_pendaftar(){

        return $this->hasOne(DataPendaftar::class);
    }
}
