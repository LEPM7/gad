<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'actividad'], function() {
    
    Route::get('view/{id}', [
        'uses' => 'TestController@view',
        'as'   => 'actividadview' 
    ]);
    
});

Route::get('admin', function () {
    return view('admin.admin');
});

Route::group(['prefix' => 'admin'], function() {
    
    Route::resource('usuarios','UsuariosController');
    Route::resource('estadios','EstadiosController');
    
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
