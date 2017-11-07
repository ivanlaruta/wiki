<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trf_Sucursal_Encuesta extends Model
{
    protected $table = "trf_sucursal_encuesta";
    protected $dateFormat = 'Ymd H:i:s';
    public $timestamps = true;


    protected $fillable =['id','id_encuesta','id_sucursal'];

    public function encuesta()
    {
        return $this->belongsTo('App\Trf_Encuesta','id_encuesta');
    }
    public function sucursal()
    {
        return $this->belongsTo('App\Trf_Sucursal','id_sucursal');
    }
    
    
}
