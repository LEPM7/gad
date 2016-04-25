<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class IndexController extends Controller
{
    public function index(){
        return view('login');
    }
    
    public function admin(){
        return view('admin.adminlogin');
    }
    
    public function adminIndex(Request $request){
        $password = $request->all()["password"];
        if($password=="admin"){
            //hacer post
            return view('admin.admin');
        }
        else {
            return view('error')->with('error','Contrasena incorrecta');
        }
    }

    public function adminMenu(){


    }

    public function usuario(){
        $user = Auth::user();
        if($user->nickname=="admin"){
            return view('admin.admin');
        }
        return view('usuario.menu');
    }
    
}
