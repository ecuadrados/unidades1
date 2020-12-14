<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $table = "actividad_infancia";
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function meta()
    {
        return $this->belongsTo(Meta::class,'meta_id', 'id');
    }

}
