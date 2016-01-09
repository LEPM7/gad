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
    <link rel="stylesheet" href="{{asset('plugins/f7/dist/css/my-app.css')}}">
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
                        <div class="center">GAD - Actividades</div>
                    </div>
                </div>
                <!-- /End of Top Navbar-->

                <div class="page-content actividades">
                    <div class="card">
                        <div class="card-header">{{$actividad->nombre}}</div>
                        <div class="card-content">
                            <div class="card-content-inner">
                                <div class="list-block">
                                    <ul>
                                        <!-- Row -->
                                        <li>
                                            <div class="item-content">
                                                <div class="item-inner">
                                                    <div class="item-title label">Descripcion:</div>
                                                    {{$actividad->descripcion}}
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item-content">
                                                <div class="item-inner">
                                                    <div class="item-title label">Fecha Inicio:</div>
                                                    {{$actividad->fecha_inicio}}
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item-content">
                                                <div class="item-inner">
                                                    <div class="item-title label">Fecha Fin:</div>
                                                    {{$actividad->fecha_fin}}
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item-content">
                                                <div class="item-inner">
                                                    <div class="item-title label">Cupo:</div>
                                                    {{$actividad->cupo}}
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item-content">
                                                <div class="item-inner">
                                                    <div class="item-title label">Limite:</div>
                                                    {{$actividad->limite}}
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item-content">
                                                <div class="item-inner">
                                                    <div class="item-title label">Precio:</div>
                                                    {{$actividad->precio}}
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <div class="card-footer">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script type="text/javascript" src="{{asset('plugins/f7/dist/js/my-app.sjs')}}"></script>
<script type="text/javascript" src="{{asset('plugins/f7/dist/js/framework7.min.js')}}"></script>
</html>