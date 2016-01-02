<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
	
    protected $table = "actividad";

    protected $fillable = ['nombre','descripcion','fecha_inicio', 'fecha_fin', 'cupo', 'limite', 'precio', 'estadio'];

    public function estadio(){
        return $this->belongsTo('App\Estadio');
    }
    
    public function actividadusuario(){
        return $this->hasMany('App\ActividadUsuario');
    }
}
