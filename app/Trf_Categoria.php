<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trf_Categoria extends Model
{
    protected $table = "trf_categorias";
    public $timestamps = true;

    public function modelos()
    {
        return $this->hasMany('App\Trf_Modelo');
    }
     public function categorias_sucursales()
    {
        return $this->hasMany('App\Trf_Categoria_Sucursal');
    }
}