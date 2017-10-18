<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trf_Categoria extends Model
{
    protected $table = "trf_categorias";
    protected $fillable = [ 'id', 'descripcion' ];
     protected $dateFormat = 'Ymd H:i:s';
    public $timestamps = true;

    public function modelos()
    {
        return $this->hasMany('App\Trf_Modelo','id');
    }

    public function motivos_categoria()
    {
        return $this->hasMany('App\Trf_Motivo_Categoria','id');
    }
    
}