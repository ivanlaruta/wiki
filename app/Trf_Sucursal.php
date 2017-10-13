<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trf_Sucursal extends Model
{
    protected $table = "trf_sucursales";
    public $timestamps = true;

    public function categorias_sucursales()
    {
        return $this->hasMany('App\Trf_Categoria_Sucursal');
    }

    public function motivos_sucursales()
    {
        return $this->hasMany('App\Trf_Motivo_Sucursal');
    }

    public function visitas()
    {
        return $this->hasMany('App\Trf_Visita');
    }

    public function ejecutivos()
    {
        return $this->hasMany('App\Trf_Ejecutivo');
    }
}
