<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Usuario;

class UsuariosController extends Controller
{
    public function index(){
        
    }
    
    public function create(){
        return view('admin.usuarios.create');
    }
    
    public function store(Request $request){
        $user = new Usuario($request->all());
        if($user->activo == "on"){
            $user->activo = true;
        } else {
              $user->activo = false;
        }
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
}