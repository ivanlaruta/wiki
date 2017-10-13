<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trf_Modelo extends Model
{
    protected $table = "trf_modelos";
    public $timestamps = true;

    public function categoria()
    {
        return $this->belongsTo('App\Trf_Categoria','id_categoria');
    }

    public function visitas_modelos()
    {
        return $this->hasMany('App\Trf_Visita_Modelo');
    }

}
