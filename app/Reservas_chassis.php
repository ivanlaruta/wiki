<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservas_chassis extends Model
{
    protected $table = "reservas_chassis";
    protected $primaryKey =['id_solicitud', 'id_detalle','chassis'];
    public $incrementing=false;
    
    protected $dates =['fecha_envio','fecha_estimada_arribo','fecha_arribo'];
    protected $dateFormat = 'Ymd H:i:s';
    public $timestamps = true;

    public function vehiculo() 
    {
        return $this->belongsTo('App\V_stock_gtauto','chassis');
    }
    public function vehiculo22() 
    {
    	return $this->belongsTo('App\V_stock_todo','chassis');
    }
}
