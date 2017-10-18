<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "users";
    protected $fillable = [
        'name', 'email', 'password','id_ubicacion'
    ];
     
    
    public function sucursal()
    {
        return $this->belongsTo('App\Trf_Sucursal','id_ubicacion');
    }
 public function sucursal2()
    {
        return $this->belongsTo(Trf_Sucursal::class,'id_ubicacion');
    }

    

    protected $hidden = [
        'password', 'remember_token',
    ];

}
