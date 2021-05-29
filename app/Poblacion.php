<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poblacion extends Model
{
    protected $table = "poblacion_infancia";
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function actividad()
    {
        return $this->belongsTo(Actividad::class,'actividad_id', 'id');
    }

    public function barrio()
    {
        return $this->belongsTo(Barrio::class,'barrio_id', 'id');
    }
}
