<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataIbu extends Model
{
    use HasFactory;

    protected $table = 'data_ibu';

    public function relasi_ke_data_pendaftar(){
        return $this->hasOne(DataPendaftar::class);

    }
}
