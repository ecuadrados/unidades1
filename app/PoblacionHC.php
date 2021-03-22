<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PoblacionHC extends Model
{
    protected $table = "poblacion_habitante_calle";
    protected $primaryKey = 'id';
    public $timestamps = false;
}
