<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Actividad;
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
        return view('admin.admin');
    }

}
