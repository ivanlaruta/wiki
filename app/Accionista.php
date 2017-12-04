<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accionista extends Model
{
    protected $table = "accionistas";
    protected $fillable = ['representante'];   

    public function persona()
    {
        return $this->belongsTo('App\Persona','representante');
    }
}
