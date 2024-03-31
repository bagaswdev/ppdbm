<?php

namespace App\Models;


// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Model;
// use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class TabelDataUserVerifikatorModel extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "table_data_user_verifikator";
    protected $primaryKey = 'tb_data_user_verifikator_id';

    protected $fillable = [
        'tb_data_user_verifikator_nama',
        'email',
        'password',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function relasi_ke_table_data_foto()
    {
        return $this->hasOne(TabelDataFotoModel::class, 'tb_data_user_verifikator_id');
    }

    public function relasi_ke_table_data_grup_wa()
    {
        return $this->hasOne(TabelDataGrupWaModel::class, 'tb_data_user_verifikator_id');
    }

    public function relasi_ke_table_data_kip()
    {
        return $this->hasOne(TabelDataKipModel::class, 'tb_data_user_verifikator_id');
    }
}
