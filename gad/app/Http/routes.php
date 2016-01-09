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



Route::group(['prefix' => 'actividad'], function() {
    
    Route::get('view/{id}', [
        'uses' => 'TestController@view',
        'as'   => 'actividadview' 
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

Route::group(['middleware' => 'web'], function () {

    Route::get('/', [
        'uses' => 'IndexController@index',
        'as'   => 'index'
    ]);

    //Login routes
    Route::get('login', 'Auth\AuthController@showLoginForm');
    Route::post('login', 'Auth\AuthController@login');
    Route::get('logout',
        [ 'uses' => 'Auth\AuthController@logout',
           'as'   => 'logout'
        ]);

    // Registration Routes...
    Route::get('register', 'Auth\AuthController@showRegistrationForm');
    Route::post('register', 'Auth\AuthController@register');

    Route::get('admin/',
        [
            'uses' => 'IndexController@admin',
            'as' => 'admin'
        ]);



    Route::group(['prefix' => 'admin' , 'middleware' => ['auth','custom'] ], function() {

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


    Route::get('descripiva/{descripcion}',
        [
            'uses' => 'IndexController@descripcion',
            'as' => 'descripcion'
        ]);

    Route::get('actividades/{id}/detalle',
        [
            'uses' => 'ActividadesController@detalle',
            'as' => 'actividades.detalle'
        ]);

    Route::get('estadios/{id}/detalle',
        [
            'uses' => 'EstadiosController@estadio',
            'as' => 'actividades.detalle'
        ]);

    Route::get('usuarios/{id}/detalle',
        [
            'uses' => 'UsuariosController@detalle',
            'as' => 'actividades.detalle'
        ]);

    Route::group(['prefix' => 'usuario', 'middleware' => 'auth'], function() {

        Route::get('menu',
            [
                'uses' => 'IndexController@usuario',
                'as' => 'usuario.menu'
            ]);

        Route::get('actividades/',
            [
                'uses' => 'ActividadesController@actividades',
                'as' => 'usuario.actividades'
            ]);

        Route::get('actividades/obtenerprecio',
            [
                'uses' => 'ActividadesController@obtenerPrecio',
                'as' => 'usuario.actividades.obtenerprecio'
            ]);

        Route::post('actividades/preciomaximo',
            [
                'uses' => 'ActividadesController@precioMaximo',
                'as' => 'usuario.actividades.preciomaximo'
            ]);

        Route::get('actividades/obtenerestadios',
            [
                'uses' => 'ActividadesController@obtenerEstadio',
                'as' => 'usuario.actividades.obtenerestadio'
            ]);

        Route::get('actividades/estadio/{estadio}',
            [
                'uses' => 'ActividadesController@estadio',
                'as' => 'usuario.actividades.estadio'
            ]);

        Route::get('inscripciones/inscribir/{actividadid}',
            [
                'uses' => 'InscripcionesController@inscribir',
                'as' => 'usuario.inscripcion'
            ]);

        Route::get('inscripciones/desincribir/{actividadid}',
            [
                'uses' => 'InscripcionesController@desinscribir',
                'as' => 'usuario.desinscripcion'
            ]);

        Route::get('actividades/obtenermatriculadas',
            [
                'uses' => 'ActividadesController@matriculadas',
                'as' => 'usuario.actividades.matriculadas'
            ]);


    });

});
