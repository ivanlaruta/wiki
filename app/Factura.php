<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table = "v_facturados";
    public $incrementing=false;
}
