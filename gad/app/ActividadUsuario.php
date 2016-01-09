<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActividadUsuario extends Model
{
    protected $table = "actividad_usuario";

    protected $fillable = ['actividad', 'usuario'];
    
    public function usuario(){
        return $this->belongsTo('App\Usuario');
    }
    
    public function actividad(){
        return $this->belongsTo('App\Actividad');
    }
}
