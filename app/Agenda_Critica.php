<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda_Critica extends Model
{
    protected $table = "agenda_critica";
    protected $fillable = ['id', 'criticidad','estado','created_by','created_at'];

    public function param_criticidad()
    {
        return $this->belongsTo('App\Parametrica','criticidad');
    }
    public function param_estado()
    {
        return $this->belongsTo('App\Parametrica','estado');
    }
    public function usuario()
    {
        return $this->belongsTo('App\User','created_by');
    }
    public function lista_areas()
    {
        return $this->hasMany('App\Areas_Agenda','id_agenda');
    }
    public function lista_empresas()
    {
        return $this->hasMany('App\Empresa_Agenda','id_agenda');
    }
    public function lista_responsables()
    {
        return $this->hasMany('App\Responsable_Agenda','id_agenda');
    }
    public function lista_actividades()
    {
        return $this->hasMany('App\Actividad_Agenda','id_agenda')->orderBy('created_at','desc');
    }

}
