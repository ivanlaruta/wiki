<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class V_histo_ubica extends Model
{
    protected $table = "v_stock_histo_ubica";
    protected $primaryKey ='CHASIS';
    public $incrementing=false;
   
   protected $fillable =['fecha_ult_mov'];

    protected $dates =['fecha_ult_mov'];
    
    protected $dateFormat = 'Ymd';

    

    public function master()
    {
    	return $this->belongsTo('App\Master','COD_MASTER');
    }

    public function modelo()
    {
    	return $this->belongsTo('App\Modelo','COD_MODELO');
    }
   
    public function marca()
    {
        return $this->belongsTo('App\Marca','cod_marca');
    } 

    public function modelo_gen()
    {
        return $this->belongsTo('App\Marca','MODELOS');
    }
    public function detalles()
    {
        return $this->hasMany('App\Detalle','CHASIS');
    }
    public function detalles_Chassis()
    {
        return $this->hasMany('App\Detalle_Chassis','CHASIS');
    }
}
