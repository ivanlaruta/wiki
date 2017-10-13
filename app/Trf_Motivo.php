<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trf_Motivo extends Model
{
    protected $table = "trf_motivos";
    public $timestamps = true;

    public function visitas()
    {
        return $this->hasMany('App\Trf_Visita');
    }

    public function ejecutivos_motivos()
    {
        return $this->hasMany('App\Trf_Ejecutivo_Motivo');
    }

    public function motivos_sucursales()
    {
        return $this->hasMany('App\Trf_Motivo_Sucursal');
    }
}