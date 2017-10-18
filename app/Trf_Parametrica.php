<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trf_Parametrica extends Model
{
    protected $table = "trf_parametricas";
     protected $dateFormat = 'Ymd H:i:s';
    public $timestamps = true;
}
