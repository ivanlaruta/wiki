<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accionista_Empresa extends Model
{
    protected $table = "empresas_accionistas";
    protected $fillable = ['id_accionista','id_empresa'];   

    public function accionista()
    {
        return $this->belongsTo('App\Accionista','id_accionista');
    }


}
