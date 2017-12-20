<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad_Agenda extends Model
{
    protected $table = "actividad_agenda";

    public function usuario()
    {
        return $this->belongsTo('App\User','created_by');
    }
}
