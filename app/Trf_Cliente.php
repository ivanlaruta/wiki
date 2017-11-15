<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trf_Cliente extends Model
{
    protected $table = "trf_clientes";
     protected $dateFormat = 'Ymd H:i:s';
    public $timestamps = true;

    public function visitas()
    {
        return $this->hasMany('App\Trf_Visita');
    }
    public function edad()
    {
        return $this->hasOne('App\Trf_Cliente','id')
        ->selectRaw('descripcion')
        ->join('trf_parametricas','codigo','=','trf_clientes.rango_edad')
        ->where('trf_parametricas.tabla','rango_edades');
    }   
}