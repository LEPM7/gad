<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- Your app title -->
    <title>GAD</title>
    <!-- Path to Framework7 Library CSS, iOS Theme -->
    <link rel="stylesheet" href="{{asset('plugins/f7/dist/css/framework7.material.min.css')}}">
    <!-- Path to Framework7 color related styles, iOS Theme -->
    <link rel="stylesheet" href="{{asset('plugins/f7/dist/css/framework7.material.colors.min.css')}}">
  </head>
  <body>
      <div class="views">
        <div class="view view-main">
          <div class="pages">
            <!-- Now we need additional "navbar-fixed" and "toolbar-fixed" classes on Page -->
            <div data-page="index" class="page navbar-fixed">

              <!-- Top Navbar-->
              <div class="navbar">
                <div class="navbar-inner">
                  <div class="center">GAD</div>
                </div>
              </div>
              <!-- /End of Top Navbar-->

              <div class="page-content">
              <div class="login-screen-title">Agregar Usuarios</div>
                    {!! Form::open(['route' => 'admin.usuarios.store', 'method' => 'POST']) !!}
                    <div class="list-block">
                        <ul>
                            <!-- Row -->
                            <li>
                              <div class="item-content">
                                <div class="item-inner">
                                    {!! Form::label('nickname','Nombre de Usuario:',['class' => 'item-title label']) !!}
                                  <div class="item-input">
                                    {!! Form::text('nickname', null, ['placeholder' => 'Nickname', 'required']) !!}
                                  </div>
                                </div>
                              </div>
                            </li>
                            <!-- Row -->
                            <li>
                              <div class="item-content">
                                <div class="item-inner">
                                    {!! Form::label('password','Password:',['class' => 'item-title label']) !!}
                                  <div class="item-input">
                                    {!! Form::password('password', null, ['placeholder' => 'Password', 'required']) !!}
                                  </div>
                                </div>
                              </div>
                            </li>
                            <!-- Row -->
                            <li>
                              <div class="item-content">
                                <div class="item-inner">
                                    {!! Form::label('nombre','Nombre:',['class' => 'item-title label']) !!}
                                  <div class="item-input">
                                    {!! Form::text('nombre', null, ['placeholder' => 'Nombre', 'required']) !!}
                                  </div>
                                </div>
                              </div>
                            </li>
                            <!-- Row -->
                            <li>
                              <div class="item-content">
                                <div class="item-inner">
                                    {!! Form::label('apellido','Apellido:',['class' => 'item-title label']) !!}
                                  <div class="item-input">
                                    {!! Form::text('apellido', null, ['placeholder' => 'Apellido', 'required']) !!}
                                  </div>
                                </div>
                              </div>
                            </li>
                            <!-- Row -->
                            <li>
                              <div class="item-content">
                                <div class="item-inner">
                                    {!! Form::label('telefono','Telefono:',['class' => 'item-title label']) !!}
                                  <div class="item-input">
                                    {!! Form::text('telefono', null, ['placeholder' => 'Telefono', 'required']) !!}
                                  </div>
                                </div>
                              </div>
                            </li>
                            <!-- Row -->
                            <li>
                              <div class="item-content">
                                <div class="item-inner">
                                    {!! Form::label('fecha_nacimiento','Fecha Nacimiento',['class' => 'item-title label']) !!}
                                  <div class="item-input">
                                    {!! Form::date('fecha_nacimiento', '2016-01-01', ['placeholder' => 'Fecha Nacimiento', 'required']) !!}
                                  </div>
                                </div>
                              </div>
                            </li>
                            <!-- Row -->
                            <li>
                              <div class="item-content">
                                <div class="item-inner">
                                    {!! Form::label('dpi','DPI',['class' => 'item-title label']) !!}
                                  <div class="item-input">
                                    {!! Form::text('dpi', null, ['placeholder' => 'DPI']) !!}
                                  </div>
                                </div>
                              </div>
                            </li>
                            <!-- Row -->
                            <li>
                              <div class="item-content">
                                <div class="item-inner">
                                    {!! Form::label('direccion','Nombre',['class' => 'item-title label']) !!}
                                  <div class="item-input">
                                    {!! Form::text('direccion', null, ['placeholder' => 'Direccion', 'required']) !!}
                                  </div>
                                </div>
                              </div>
                            </li>
                            <!-- Row -->
                            <li>
                              <div class="item-content">
                                <div class="item-inner">
                                    {!! Form::label('activo','Activo',['class' => 'item-title label']) !!}
                                  <div class="item-input">
                                      <label class="label-switch">
                                      {!! Form::checkbox('activo', null, ['required']) !!}
                                      <div class="checkbox"></div>
                                    </label>                                    
                                  </div>
                                </div>
                              </div>
                            </li>
                            <!-- Row -->
                            <li>
                              <div class="item-content">
                                <div class="item-inner">
                                    {!! Form::label('rol','Rol',['class' => 'item-title label']) !!}
                                  <div class="item-input">
                                    {!! Form::select('rol',['usuario' => 'usuario'] ,['required']) !!}
                                  </div>
                                </div>
                              </div>
                            </li>
                        </ul>
                        {!! Form::submit('Agregar', ['class' => 'button button-fill button-big']) !!}
                    </div>     
                    {!! Form::close() !!}
               </div>
            </div>
          </div>
        </div>
      </div>  
  </body>
  <script type="text/javascript" src="{{asset('plugins/f7/dist/js/my-app.sjs')}}"></script>
  <script type="text/javascript" src="{{asset('plugins/f7/dist/js/framework7.min.js')}}"></script>
</html>