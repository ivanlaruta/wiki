<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    protected $table = "v_ubicaciones";
    public $incrementing=false;
    protected $primaryKey ='codigo';
}
