<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    protected $table = "meta_infacia";
    protected $primaryKey = 'id';
    public $timestamps = false;
}
