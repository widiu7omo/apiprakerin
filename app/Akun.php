<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Akun extends Model
{
    //
//    use HasApiTokens, Notifiable;
    protected $table = 'tb_akuns';
    protected $guarded = [];
    protected $primaryKey = 'username';

    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'username','name', 'email', 'password',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function mahasiswas() : HasMany{
        return $this->hasMany(Mahasiswa::class,'username');
    }
    public function pivotlevels() : HasMany{
        return $this->hasMany(Pivotlevel::class,'username');
    }
//    public function pegawais(){
//        return $this->hasMany()
//    }
}
