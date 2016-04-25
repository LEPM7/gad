<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Actividad;
use Illuminate\Support\Facades\Auth;

class InscripcionesController extends Controller
{

    public function inscribir($actividadid){
        $user = Auth::user();
        $user->inscripcion()->attach($actividadid);
        return view('usuario.menu');
    }

    public function  desinscribir($actividadid){
        $user = Auth::user();
        $user->inscripcion()->detach($actividadid);
        return view('usuario.menu');
    }
}
