<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    //
    protected $table = 'tb_mahasiswa';
    protected $primaryKey = 'nim';
    protected $guarded = [];
    public $incrementing = false;

    public $timestamps = false;

    public function tahunakademik(){
        return $this->belongsTo(TahunAkademik::class,'id_tahun_akademik');
    }
}
