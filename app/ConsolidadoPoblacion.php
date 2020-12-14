<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConsolidadoPoblacion extends Model
{
    protected $table = "consolidado_poblacion";
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function actividad()
    {
        return $this->belongsTo(Actividad::class,'actividad_id', 'id');
    }
}
