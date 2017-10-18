<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trf_Encuesta extends Model
{
    protected $table = "trf_encuesta";
    protected $dateFormat = 'Ymd H:i:s';
    public $timestamps = true;


    protected $fillable =['id','descripcion','id_sucrsal'];

    public function sucursal()
    {
        return $this->belongsTo('App\Trf_Sucursal','id_sucursal');
    }
    public function visitas()
    {
        return $this->hasMany('App\Trf_Motivo_Encuesta');
    }    
}
