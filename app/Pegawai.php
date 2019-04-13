<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pegawai extends Model
{
    //
    protected $table = 'tb_pegawai';
    protected $primaryKey = 'nim_nik';
    protected $guarded = [];
    public $incrementing = false;

    public $timestamps = false;

    public function akun(): BelongsTo {
        return $this->belongsTo(Akun::class,'username');
    }
//    public function prodi(): BelongsTo {
//        return $this->belongsTo(Prodi::class,'id_program_studi');
//    }@TODO:harusnya ada, tapi belum terelasikan
}
