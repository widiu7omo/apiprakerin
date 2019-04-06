<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class TahunAkademik extends Model
{
    //
    protected $table = 'tahun_akademik';
    protected $guarded = [];
    protected $primaryKey = 'id_tahun_akademik';

    public $incrementing = false;
    public $timestamps = false;

    public function mahasiswas(){
        return $this->hasMany(Mahasiswa::class,'id_tahun_akademik');
    }
}
