<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pivotlevel extends Model
{
    protected $table = 'tb_level';
    protected $primaryKey = 'id_level';
    protected $guarded = [];
    public $incrementing = false;
    public $timestamps = false;

    public function akun(): BelongsTo {
        return $this->belongsTo(Akun::class,'username');
    }
    public function masterlevel(): BelongsTo {
        return $this->belongsTo(Masterlevel::class,'id_master_level');
    }
}
