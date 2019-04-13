<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Masterlevel extends Model
{
    //
    protected $table = 'tb_master_level';
    protected $primaryKey = 'id_master_level';
    protected $guarded = [];
    public $incrementing = false;
    public $timestamps = false;

    public function pivotlevels():HasMany{
        return $this->hasMany(Pivotlevel::class,'id_master_level');
    }
}
