<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Prodi extends Model
{
    //
    protected $table = "tb_program_studi";
    protected $guarded = [];
    protected $primaryKey = 'id_program_studi';

    public $timestamps = false;
    public $incrementing = false;

    public function mahasiswas() : HasMany{
        return $this->hasMany(Mahasiswa::class,'username');
    }
}
