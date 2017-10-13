<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trf_Visita_Modelo extends Model
{
    protected $table = "trf_visita_modelo";
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