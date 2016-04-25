<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Actividad;
use DB;

class TestController extends Controller
{
    public function view($id){
        //$actividad = DB::table('actividad')->where('actividad', $id)->first();
        //dd($actividad);
        return view('admin.admin');
        
    }
}
