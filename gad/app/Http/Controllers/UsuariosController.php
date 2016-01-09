<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class UsuariosController extends Controller
{
    public function index(){
        $usuarios = User::orderBy('usuario','DESC')->paginate(100);
        return view('admin.usuarios.all')->with('usuarios',$usuarios);
    }
    
    public function create(){
        return view('admin.usuarios.create');
    }
    
    public function store(Request $request){
        $user = new User($request->all());
        if($user->activo == "on"){
            $user->activo = true;
        } else {
              $user->activo = false;
        }
        $user->password = bcrypt($user->password);
        $user->save();
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
        $user = User::find($id);
        $affectedRows = User::where('usuario', '=', $id)->delete();
        return view('descriptiva')->with('descriptiva',$user->nombre);
    }
}
