<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $primaryKey = 'usuario';

    protected $table = "usuario";

    protected $fillable = ['nickname', 'password', 'nombre', 'apellido', 'telefono','fecha_nacimiento','dpi','direccion','activo','rol'];
    
    public function inscripcion(){
        return $this->belongsToMany('App\Actividad','actividad_usuario', 'usuario','actividad');
    }
}
