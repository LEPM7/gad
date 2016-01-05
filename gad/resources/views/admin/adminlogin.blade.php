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

              <div class="page-content login-screen-content">
            <div class="login-screen-title">Administrador</div>
            <!-- Login form -->
            <form>
              <div class="list-block">
                <ul>
                  <li class="item-content">
                    <div class="item-inner">
                      <div class="item-title label">Contrasena</div>
                      <div class="item-input">
                        <input type="password" name="password" placeholder="Password">
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="list-block">
                <ul>
                  <li>
                <p><a href="#" class="  button button-fill button-big">Sing In</a></p>  
                  </li>
                </ul>
              </div>
            </form>
          </div>

            </div>
          </div>
        </div>
      </div>  
  </body>
  <script type="text/javascript" src="{{asset('plugins/f7/dist/js/framework7.min.js')}}"></script>
</html>