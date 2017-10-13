<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trf_Ejecutivo_Motivo extends Model
{
    protected $table = "trf_ejecutivo_motivo";
    public $timestamps = true;

    public function modelo()
    {
        return $this->belongsTo('App\Trf_Modelo','id_modelo');
    }
    public function visita()
    {
        return $this->belongsTo('App\Trf_Visita','id_visita');
    }
}
