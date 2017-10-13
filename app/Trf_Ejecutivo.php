<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trf_Ejecutivo extends Model
{
    protected $table = "trf_ejecutivos";
    public $timestamps = true;

    public function visitas()
    {
        return $this->hasMany('App\Trf_Visita');
    }
    public function visitas()
    {
        return $this->hasMany('App\Trf_Visita');
    }
    public function ejecutivos_motivos()
    {
        return $this->hasMany('App\Trf_Ejecutivo_Motivo');
    }
}
