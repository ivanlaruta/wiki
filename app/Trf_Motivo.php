<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trf_Motivo extends Model
{
    protected $table = "trf_motivos";
     protected $dateFormat = 'Ymd H:i:s';
    public $timestamps = true;

    public function visitas()
    {
        return $this->hasMany('App\Trf_Visita');
    }

    public function ejecutivos_motivos()
    {
        return $this->hasMany('App\Trf_Ejecutivo_Motivo');
    }

    public function motivos_encuesta()
    {
        return $this->hasMany('App\Trf_Motivo_Encuesta');
    }

    public function motivos_categoria()
    {
        return $this->hasMany('App\Trf_Motivo_Categoria');
    }

   
}