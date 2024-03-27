<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */


    protected $table = "table_data_user";
    protected $table2 = "table_data_user_verifikasi";

    protected $fillable2 = [
        'tb_data_user_verifikator_id',
        'tb_data_user_verifikator_nama',
        'tb_data_user_verifikator_username',
        'tb_data_user_verifikator_password',
    ];

    protected $fillable = [
        'tb_data_user_nik',
        'tb_data_user_nama',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    public function relasi_ke_verifikasi()
    {
        return $this->belongsTo(Verifikasi::class, 'id', 'id_verificator');
    }
}
