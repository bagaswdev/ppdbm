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
}
