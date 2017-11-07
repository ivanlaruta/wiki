<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trf_Encuesta extends Model
{
    protected $table = "trf_encuesta";
    protected $dateFormat = 'Ymd H:i:s';
    public $timestamps = true;


    protected $fillable =['id','descripcion'];

    
    public function motivos_encuesta()
    {
        return $this->hasMany('App\Trf_Motivo_Encuesta');
    }  
    public function sucursales_encuesta()
    {
        return $this->hasMany('App\Trf_Sucursal_Encuesta');
    }    
}
