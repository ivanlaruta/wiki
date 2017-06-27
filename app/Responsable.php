<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    protected $table = "responsables";
    public $timestamps = true;
    protected $fillable =['id'];
    protected $primaryKey ='id';
    
    
}
