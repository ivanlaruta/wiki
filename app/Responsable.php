<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    protected $table = "responsables";

    protected $fillable = ['id_persona'];

    public function persona()
    {
        return $this->belongsTo('App\Persona','id_persona');
    }
}
