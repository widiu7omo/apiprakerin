<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mahasiswa extends Model
{
    protected $table = 'tb_mahasiswa';
    protected $primaryKey = 'nim';
    protected $guarded = [];
    public $incrementing = false;

    public $timestamps = false;

    public function tahunakademik(): BelongsTo{
        return $this->belongsTo(TahunAkademik::class,'id_tahun_akademik');
    }
    public function akun(): BelongsTo {
        return $this->belongsTo(Akun::class,'username');
    }
    public function prodi(): BelongsTo {
        return $this->belongsTo(Prodi::class,'id_program_studi');
    }
    public function user(): BelongsTo{
        return $this->belongsTo(User::class,'akun_id');
    }


}
