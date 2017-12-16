<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Areas_Agenda extends Model
{
    protected $table = "area_agenda";

    protected $fillable = ['id', 'id_agenda','id_area'];

    public function agenda()
    {
        return $this->belongsTo('App\Agenda_Critica','id_agenda');
    }

    public function param_area()
    {
        return $this->belongsTo('App\Parametrica','id_area');
    }
}
