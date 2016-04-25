<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Actividad;
use App\Estadio;
use Illuminate\Support\Facades\Auth;

class ActividadesController extends Controller
{
    public function index(){
         $actividades = Actividad::orderBy('fecha_inicio','DESC')->paginate(100);
        return view('admin.actividades.all')->with('actividades',$actividades);
    }
    
    public function create(){
        $estadios = DB::table('estadio')->lists('nombre');
        return view('admin.actividades.create', ['estadios' => $estadios]);
    }
    
    public function store(Request $request){
        $actividad = new Actividad($request->all());
        $estadios = DB::table('estadio')->lists('nombre');
        $actividad->estadio = $estadios[$actividad->estadio];          
        $actividad->estadio = DB::table('estadio')->select('estadio')->where('nombre','=',$actividad->estadio)->get();
        $actividad->estadio = $actividad->estadio[0]->estadio;
        $actividad->save();
        return view('admin.admin');
    }
    
    public function show($id){
        
    }
    
    public function edit($id){
        
    }
    
    public function update(Request $request, $id){
        
    }
    
    public function destroy($id){
        
    }
    
    public function delete($id){
        $affectedRows = Actividad::where('actividad', '=', $id)->delete();
        return view('descriptiva')->with('descriptiva',$affectedRows);
    }

    /**
     * @param $tipo
     *  1 = todas ordenada por fecha_inicio
     * @return $this
     */
    public function actividades(){
        $actividades = Actividad::orderBy('fecha_inicio','ASC')->paginate(100);
        return view('usuario.actividades.actividades')->with('actividades',$actividades);
    }

    public function obtenerPrecio(){
        return view('usuario.actividades.actividadesprecio');
    }

    public function precioMaximo(Request $request){
        $precio = $request->all()["precio"];
        $actividades = Actividad::where('precio','<=',$precio)->get();
        return view('usuario.actividades.actividades')->with('actividades',$actividades);
    }

    public function  obtenerEstadio(){
        $estadios = Estadio::orderBy('estadio','DESC')->paginate(100);
        return view('usuario.actividades.actividadesestadio')->with('estadios',$estadios);
    }

    public function  estadio($estadio){
        $actividades = Actividad::where('estadio','=',$estadio)->get();
        return view('usuario.actividades.actividades')->with('actividades',$actividades);
    }

    public function matriculadas(){
        $user = Auth::user();
        $actividades = $user->inscripcion()->get();
       // dd($actividades);
        return view('usuario.actividades.actividadesmatriculado')->with('actividades',$actividades);
    }

    public function detalle($id){
        $actividad = Actividad::find($id);
        return view('comun.detalleactividades')->with('actividad',$actividad);
    }



}
