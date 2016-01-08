<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){
        
       // return view('login');
    }
    
    public function admin(){
        return view('admin.adminlogin');
    }
    
    public function adminIndex(Request $request){
        $password = $request->all()["password"];
        if($password=="admin"){
           session()->put('admin', 'tuprima');
            return view('admin.admin');//redirect()->route('admin.menu');
        }
        else {
            return view('error')->with('error','Contrasena incorrecta');
        }
        
        
    }
    
    public function adminMenu(){
        dd(session()->get('admin'));
       // dd($adminSession);
  //      if($adminSession){
  //          dd('tu mama');
    //    } else {
        //    dd('tu prima');
//}
        
    }
    
}
