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

Route::get('/', [
        'uses' => 'IndexController@index',
        'as'   => 'index' 
    ]);

Route::group(['prefix' => 'actividad'], function() {
    
    Route::get('view/{id}', [
        'uses' => 'TestController@view',
        'as'   => 'actividadview' 
    ]);
    
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('/',
           [
               'uses' => 'IndexController@admin',
               'as' => 'admin'
           ]);
    
    Route::post('index',
           [
               'uses' => 'IndexController@adminIndex',
               'as' => 'admin.index'
           ]);
    
    Route::get('menu',
           [
               'uses' => 'IndexController@adminMenu',
               'as' => 'admin.menu'
           ]);

    
    Route::resource('usuarios','UsuariosController');
    Route::get('usuarios/{id}/delete',
           [
               'uses' => 'UsuariosController@delete',
               'as' => 'admin.usuarios.delete'
           ]);
    
    Route::resource('estadios','EstadiosController');
    Route::get('estadios/{id}/delete',
           [
               'uses' => 'EstadiosController@delete',
               'as' => 'admin.estadios.delete'
           ]);
    Route::resource('actividades', 'ActividadesController');
    Route::get('actividades/{id}/delete',
           [
               'uses' => 'ActividadesController@delete',
               'as' => 'admin.actividades.delete'
           ]);
    
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
