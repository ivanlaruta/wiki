<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsable_Agenda extends Model
{
    protected $table = "responsable_agenda";

    protected $fillable = ['id_responsable'];

    public function responsable()
    {
        return $this->belongsTo('App\Responsable','id_responsable');
    }
}
