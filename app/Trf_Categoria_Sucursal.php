<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trf_Categoria_Sucursal extends Model
{
    protected $table = "trf_categoria_sucursal";
    public $timestamps = true;

    public function categoria()
    {
        return $this->belongsTo('App\Trf_Categoria','id_categoria');
    }
	public function sucursal()
    {
        return $this->belongsTo('App\Trf_Categoria','id_sucursal');
    }

   
}
