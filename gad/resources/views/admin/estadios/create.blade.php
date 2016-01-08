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
              <div class="login-screen-title">Agregar Estadios</div>
                    {!! Form::open(['route' => 'admin.estadios.store', 'method' => 'POST']) !!}
                    <div class="list-block">
                        <ul>
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
                                    {!! Form::label('descripcion','Descripcion:',['class' => 'item-title label']) !!}
                                  <div class="item-input">
                                    {!! Form::text('descripcion', null, ['placeholder' => 'Descripcion', 'required']) !!}
                                  </div>
                                </div>
                              </div>
                            </li>
                            <!-- Row -->
                            <li>
                              <div class="item-content">
                                <div class="item-inner">
                                    {!! Form::label('direccion','Direccion:',['class' => 'item-title label']) !!}
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
                                    {!! Form::label('contacto','Contacto:',['class' => 'item-title label']) !!}
                                  <div class="item-input">
                                    {!! Form::text('contacto', null, ['placeholder' => 'Contacto', 'required']) !!}
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
                                    {!! Form::label('latitud','Latitud:',['class' => 'item-title label']) !!}
                                  <div class="item-input">
                                    {!! Form::number('latitud', null, ['placeholder' => 'Latitud', 'step' => '0.01', 'required']) !!}
                                  </div>
                                </div>
                              </div>
                            </li>
                            <!-- Row -->
                            <li>
                              <div class="item-content">
                                <div class="item-inner">
                                    {!! Form::label('longitud','Longitud:',['class' => 'item-title label']) !!}
                                  <div class="item-input">
                                      {!! Form::number('longitud', null, ['placeholder' => 'Longitud', 'step' => '0.01', 'required']) !!}
                                  </div>
                                </div>
                              </div>
                            </li>
                            <!-- Row -->
                            <li>
                              <div class="item-content">
                                <div class="item-inner">
                                    {!! Form::label('capacidad','Capacidad:',['class' => 'item-title label']) !!}
                                  <div class="item-input">
                                    {!! Form::number('capacidad', null, ['placeholder' => 'Capacidad', 'step' => '1', 'required']) !!}
                                  </div>
                                </div>
                              </div>
                            </li>
                            <!-- Row -->
                            <li>
                              <div class="item-content">
                                <div class="item-inner">
                                    {!! Form::label('ocupado','Ocupado:',['class' => 'item-title label']) !!}
                                  <div class="item-input">
                                      <label class="label-switch">
                                      {!! Form::checkbox('ocupado', null, ['required']) !!}
                                      <div class="checkbox"></div>
                                    </label>                                    
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