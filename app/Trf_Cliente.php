<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trf_Cliente extends Model
{
    protected $table = "trf_clientes";
    public $timestamps = true;

    public function visitas()
    {
        return $this->hasMany('App\Trf_Visita');
    }
}