<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelDataGrupWaModel extends Model
{
    use HasFactory;

    protected $table = "table_data_grup_wa";

    protected $fillable = [
        'tb_data_grup_wa_id',
        'tb_data_siswa_id',
        'tb_data_grup_wa_file',
        "tb_data_grup_wa_status",
    ];
}
