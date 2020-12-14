<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidad_General extends Model
{
    public function centro_vida()
    {
        return $this->belongsTo(Centro_Vida::class,'centro_vida_id', 'id');
    }
}
