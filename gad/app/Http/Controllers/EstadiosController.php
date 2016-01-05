<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Estadio;

class EstadiosController extends Controller
{
    public function index(){
        
    }
    
    public function create(){
        return view('admin.estadios.create');
    }
    
    public function store(Request $request){
        $estadio = new Estadio($request->all());
        if($estadio->ocupado == "on"){
            $estadio->ocupado = true;
        } else {
              $estadio->ocupado = false;
        }
        $estadio->save();
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