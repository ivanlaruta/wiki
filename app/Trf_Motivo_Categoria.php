<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trf_Motivo_Categoria extends Model
{
    protected $table = "trf_motivo_categoria";
     protected $dateFormat = 'Ymd H:i:s';
    public $timestamps = true;


    // protected $fillable =['id','id_encuesta','id_motivo'];

    public function categoria()
    {
        return $this->belongsTo('App\Trf_Categoria','id_categoria');
    }
    public function motivo()
    {
        return $this->belongsTo('App\Trf_Motivo','id_motivo');
    }
}
