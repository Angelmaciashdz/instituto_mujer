<!DOCTYPE html>
<html lang="es">
<head>
  <title>Iniciar sesion - Instituto Municipal de la mujer</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="stylesheet" href="styles/css/main.css">
</head>
<body class="cover" style="background-image: url(../public/imagenes/logos/po.png);">
  <br>
  <div class="container" >

            <div class="row">
               <div class="col-md-2">
              <img src="..\public\imagenes\logos\h3.png" style="margin-top: 0px; width: 115px; height: 90px;" />
            </div>
              <div class="col-sm-8">
                  <center><h1><strong id="encabezado_login">INSTITUTO MUNICIPAL DE LA MUJER</strong></h1>
                    </center>
 
              </div>
                 <div class="col-md-2">
              <img src="..\public\imagenes\logos\logo.png" class="img-circle" style="margin-top: 10px; margin-left: 35px; width: 100px; height: 90px;" />
            </div>
            </div>
        </div>
  <form action="?c=Login&a=Inicia_sesion" method="post" autocomplete="off" class="full-box logInForm">
    <p class="text-center text-muted"><i class="zmdi zmdi-account-circle zmdi-hc-5x"></i></p>
    <p class="text-center text-muted text-uppercase">Digita tu usuario y contraseña</p>
    <div class="form-group label-floating">
      <label class="control-label" for="User">Usuario</label>
      <input required name="usuario" class="form-control" id="UserEmail" type="text">
      <p class="help-block">Escribe tú Usuario</p>
    </div>
    <div class="form-group label-floating">
      <label class="control-label" for="UserPass">Contraseña</label>
      <input required name="password" class="form-control" id="UserPass" type="password">
      <p class="help-block">Escribe tú contraseña</p>
    </div>
    <div class="form-group text-center">
      <button type="submit" class="btn btn-raised btn-success">Iniciar Sesion</button>
    </div>
  </form>
  <div class="row form-group text-center" id="btn_back">
    <center><button class='btn btn-success btn-raised btn-xs' onclick="Volver()"><i class='zmdi zmdi-chevron-left'></i> Volver a la página principal</button></center>
  </div>


          

  <!--====== Scripts -->
  <script src="styles/js/jquery-3.1.1.min.js"></script>
  <script src="styles/js/bootstrap.min.js"></script>
  <script src="styles/js/material.min.js"></script>
  <script src="styles/js/ripples.min.js"></script>
  <script src="styles/js/sweetalert2.min.js"></script>
  <script src="styles/js/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="styles/js/main.js"></script>
  <script>
    $.material.init();
  </script>
</body>
</html>