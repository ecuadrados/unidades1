<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poblacion extends Model
{
    protected $table = "poblacion_infancia";
    protected $primaryKey = 'id';
    public $timestamps = false;
}