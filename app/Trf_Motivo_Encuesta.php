<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trf_Motivo_Encuesta extends Model
{
    protected $table = "trf_motivo_encuesta";
     protected $dateFormat = 'Ymd H:i:s';
    public $timestamps = true;


    protected $fillable =['id','id_encuesta','id_motivo'];

    public function encuesta()
    {
        return $this->belongsTo('App\Trf_Encuesta','id_encuesta');
    }
    public function motivo()
    {
        return $this->belongsTo('App\Trf_Motivo','id_motivo');
    }
    
}
