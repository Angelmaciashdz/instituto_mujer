<!DOCTYPE html>
  <html>
    <head>
      <title>Contacto - Instituto Municipal de la mujer</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Seguridad">
      <meta name="keywords" content="seguridad">
      <meta name="author" content="Amacias">
      <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
       <link rel="shortcut icon" href="favicon.ico">
 <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../styles/css/materialize.min.css"  media="screen,projection"/>
 <!--Import materialize.css-->
      <script src="https://use.fontawesome.com/78a03bac99.js"></script>
      <link type="text/css" rel="stylesheet" href="../styles/css/web.css" />
          <link type="text/css" rel="stylesheet" href="../styles/css/materialize-social.css" />

  </head>
  <body onload="activeContacto()">
        <header>
     <div class="parallax-container"  id="container_parallax">
    <div class="parallax"><img class="responsive-img" src="..\..\public\imagenes\logos\contacto.jpg"></div>
        <div class="container" id="enca_contacto"><h3 id="t_enca_contacto">CONTACTO</h3></div>
      </div>
      </header>


    <section id="ser">
      <div class="row">
          <!--Intramuros-->
        <div class="col s12" id="datos_cont">
          <div class="col s12">
<div class="col s12 l4">
 <i class="material-icons medium"id="central"><img src="../styles/icons/2x/account_circle_white.png"></i>
 <h6 id="central">Titular del instituto</h6>
 <h6>Maria Cristina Flores Barrera</h6>
</div>
<div class="col s12 l4">
  <i class="material-icons medium" id="central"><img src="../styles/icons/2x/builder_white.png"></i>
  <h6 id="central">Horario de atención</h6>
<h6 id="str">Lunes - viernes</h6>
<h6>15:00 - 18:00 horas</h6>
<h6>Tel: (01597)1091048</h6>

</div>
<div class="col s12 l4">
  <i class="material-icons medium"id="central"><img src="../styles/icons/2x/place_white.png"></i>
   <h6 id="central">Ubicacion</h6>
<h6> Plaza de la Constitucion N.1 Colonia Centro, Ecatzingo Estado de México, CP 56990</h6>
<a class="waves-effect waves-light btn-floating btn-large facebook"style="margin-left: 5px; " target="_blank" href="https://www.facebook.com/profile.php?id=100011000773371&fref=mentions">
<i class="fa fa-facebook" ></i></a>
  <a class="waves-effect waves-light btn-floating btn-large twitter" target="_blank" href="https://twitter.com/search?q=instituto%20municipal%20de%20la%20mujer&src=typd">
<i class="fa fa-twitter"></i></a>
</div>
          
          </div>
        </div>
      </div>
    </section>



         <section id="serv">
      <div class="row">
          <!--Intramuros-->
        <div class="col s12" id="datos_cont_mens">
          <div class="col s12"><h5 class="center-align" id="titulo">UNETE</h5>
            <div class="col s1 l1"></div>
            <div class="col s10 l10">
              
   <form class="frm-contacto" id="frm-contacto" action="correo_contacto.php" method="post" enctype="multipart/form-data">
              <div class="col s12">
                   <div class="input-field" id="texto">
                    <input id="nombre" name="nombre" type="text" class="validate">
                    <label for="nombre">*Nombre Completo</label>
                  </div>
              </div>
                <div class="col s12 m6 l6"> 
                  <div class="input-field" id="texto">
                    <input id="correo" name="correo" type="text" class="validate">
                    <label for="correo">*Correo electrónico</label>
                    <span id="correoOK"></span>
                  </div>
                </div>
                <div class="col s12 m6 l6">
                  <div class="input-field" id="texto">
                    <input id="telefono" name="telefono" type="tel" class="validate validanumericos">
                    <label for="telefono">*Telefono</label>
                  </div>
              </div>
            <div class="col s12">
                <div class="input-field" id="texto">
                    <input id="asunto" name="asunto" type="text" class="validate">
                    <label for="asunto">*Asunto</label>
                  </div>
            </div>
              <div class="input-field col s12">

<textarea id="mensaje" name="mensaje" maxlength="500" class="validate"></textarea>
          <label for="textarea1" style="align-content: center;">*Mensaje</label>
            </div>
        <button class="btn waves-effect waves-light blue darken-2" type="submit"  name="crear" id="crear">Enviar datos<img src="../styles/icons/1x/send_white.png" style="margin-left: 4px;margin-top: 4px;"></button>
            </form>

            </div>
            <div class="col s1 l1"></div>
          </div>
        </div>
      </div>
    </section>
         <!--contactanos-->
   <section id="contacto">
  
     <?php include "../elements/contacto_datos.php"; ?>
    </section>
    <footer>
      <?php  include "../elements/footer.html"; ?>  
    </footer> 

    <!--JavaScript at end of body for optimized loading-->
  <script src="../styles/js/materialize.min.js"></script>
  <script src="../styles/js/jquery.min.js"></script>
  <script src="../styles/js/jquery.validate.min.js"></script>
  <script src="../styles/js/materialize.min.js"></script>
  <script src="../styles/js/materialize.js"></script>
  <script src="../styles/js/push.min.js"></script>
  <script src="../styles/js/menu.js"></script>
  <script src="../styles/js/valida.js"></script>

  </body>
</html>
