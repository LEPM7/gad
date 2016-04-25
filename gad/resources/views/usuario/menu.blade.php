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
                    <div class="login-screen-title">Menu Usuario</div>
                    <p><a href="{{route('usuario.actividades')}}" class="button">Actividades</a></p>
                    <p><a href="{{route('usuario.actividades.obtenerprecio')}}" class="button">Actividades/Precio</a></p>
                    <p><a href="{{route('usuario.actividades.obtenerestadio')}}" class="button">Actividades/Estadio</a></p>
                    <p><a href="{{route('usuario.actividades.matriculadas')}}" class="button">Actividades Asignadas</a></p>
                    <p><a href="{{route('logout')}}" class="button">Salir</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script type="text/javascript" src="{{asset('plugins/f7/dist/js/framework7.min.js')}}"></script>
</html>