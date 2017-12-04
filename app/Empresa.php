<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = "empresas";
    protected $fillable = ['gerente'];   

    public function persona_gerente()
    {
        return $this->belongsTo('App\Persona','gerente');
    }
}
