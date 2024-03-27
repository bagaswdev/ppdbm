<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Foundation\Auth\TabelDataUserModel as Authenticatable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class TabelDataUserVerifikatorModel extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "table_data_user_verifikator";

    protected $fillable = [
        'tb_data_user_verifikator_id',
        'tb_data_user_verifikator_nama',
        'tb_data_user_verifikator_username',
        'tb_data_user_verifikator_password',
    ];
}
