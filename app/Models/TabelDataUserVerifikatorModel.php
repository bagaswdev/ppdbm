<?php

namespace App\Models;


// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class TabelDataUserVerifikatorModel extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "table_data_user_verifikator";

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
