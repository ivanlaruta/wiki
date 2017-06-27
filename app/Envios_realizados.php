<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Envios_realizados extends Model
{
    protected $table = "envios_realizados";

	protected $primaryKey ='id_envio';

    protected $dates =['fecha_envio','fecha_estimada_arribo','fecha_arribo'];
    protected $dateFormat = 'Y-m-d';
    public $timestamps = true;

    public function conductor1()
    {
        return $this->belongsTo('App\Conductor','conductor');
    }

    public function transportadora1()
    {
        return $this->belongsTo('App\Transportadora','transportadora');
    }

     public function responsable1()
    {
        return $this->belongsTo('App\Responsable','responsable');
    }
}
