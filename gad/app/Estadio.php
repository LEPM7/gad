<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estadio extends Model
{
    protected $primaryKey = 'estadio';

    protected $table = "estadio";
    
    protected $fillable = ['nombre', 'descripcion', 'direccion', 'contacto', 'telefono', 'latitud', 'longitud', 'capacidad', 'ocupado'];
    
    public function actividades(){
        return $this->hasMany('App\Actividad');
    }
    
    
}
