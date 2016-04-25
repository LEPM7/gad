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
              <div class="login-screen-title">Agregar Actividades</div>
                    {!! Form::open(['route' => 'admin.actividades.store', 'method' => 'POST']) !!}
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
                                    {!! Form::label('fecha_inicio','Fecha Inicio:',['class' => 'item-title label']) !!}
                                  <div class="item-input">
                                    {!! Form::date('fecha_inicio', '2016-01-01', ['placeholder' => 'Fecha Inicio', 'required']) !!}
                                  </div>
                                </div>
                              </div>
                            </li>
                            <!-- Row -->
                            <li>
                              <div class="item-content">
                                <div class="item-inner">
                                    {!! Form::label('fecha_fin','Fecha Fin:',['class' => 'item-title label']) !!}
                                  <div class="item-input">
                                    {!! Form::date('fecha_fin', '2016-01-01', ['placeholder' => 'Fecha Fin', 'required']) !!}
                                  </div>
                                </div>
                              </div>
                            </li>
                            <!-- Row -->
                            <li>
                              <div class="item-content">
                                <div class="item-inner">
                                    {!! Form::label('cupo','Cupo:',['class' => 'item-title label']) !!}
                                  <div class="item-input">
                                    {!! Form::number('cupo', null, ['placeholder' => 'Cupo', 'required']) !!}
                                  </div>
                                </div>
                              </div>
                            </li>
                            <!-- Row -->
                            <li>
                              <div class="item-content">
                                <div class="item-inner">
                                    {!! Form::label('limite','Limite:',['class' => 'item-title label']) !!}
                                  <div class="item-input">
                                    {!! Form::number('limite', null, ['placeholder' => 'Limite', 'required']) !!}
                                  </div>
                                </div>
                              </div>
                            </li>
                            <!-- Row -->
                            <li>
                              <div class="item-content">
                                <div class="item-inner">
                                    {!! Form::label('precio','Precio:',['class' => 'item-title label']) !!}
                                  <div class="item-input">
                                    {!! Form::number('precio', null, ['placeholder' => 'Precio', 'step' => '0.01', 'required']) !!}
                                  </div>
                                </div>
                              </div>
                            </li>
                            <!-- Row -->
                            <li>
                              <div class="item-content">
                                <div class="item-inner">
                                    {!! Form::label('estadio','Estadio:',['class' => 'item-title label']) !!}
                                  <div class="item-input">
                                    {!! Form::select('estadio',$estadios ,['required']) !!}
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