<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = "usuario";

    protected $fillable = ['nickname', 'password', 'nombre', 'apellido', 'telefono','fecha_nacimiento','dpi','direccion','activo','rol'];
    
    public function actividadusuario(){
        return $this->hasMany('App\ActividadUsuario');
    }
}
