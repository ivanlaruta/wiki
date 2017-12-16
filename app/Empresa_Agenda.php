<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa_Agenda extends Model
{
    protected $table = "empresa_agenda";

    protected $fillable = ['id', 'id_agenda','id_empresa'];

    public function agenda()
    {
        return $this->belongsTo('App\Agenda_Critica','id_agenda');
    }

    public function empresa()
    {
        return $this->belongsTo('App\Empresa','id_empresa');
    }

}
