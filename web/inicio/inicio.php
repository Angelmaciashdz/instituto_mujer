<!DOCTYPE html>
  <html>
    <head>
      <title>Inicio - Instituto Municipal de la mujer</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Seguridad">
      <meta name="keywords" content="seguridad">
      <meta name="author" content="Amacias">
      <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
      <link rel="shortcut icon" href="favicon.ico" class="circle responsive-img">
 <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="web/styles/css/materialize.min.css"  media="screen,projection"/>

 <!--Import materialize.css-->
      <script src="https://use.fontawesome.com/78a03bac99.js"></script>
      <link type="text/css" rel="stylesheet" href="web/styles/css/web.css" />

  </head>
  <body onload="activeInicio()">
<div class="navbar-fixed">
  <nav id="navbar">
    <div class="nav-wrapper">
      <a href="#" data-activates="paginas" class="button-collapse letra right"><i class="material-icons">menu</i></a>
      <a href="#!" class="brand-logo left"><img src="public\imagenes\logos\g1.jpg" class="circle img1"></a>
      <a href="#!" class="brand-logo left"><img src="public\imagenes\logos\h3.png" class="circle img2"></a>
      <a href="#!" class="brand-logo left"><img src="public\imagenes\logos\logo.png" class="circle img3"></a>
      <a href="#!" class="brand-logo left"><img src="public\imagenes\logos\mujer1.jpg" class="circle img4"></a>
      <ul id="nav-mobile" class="lista-sm right hide-on-med-and-down">
        <li><a id="btn_inicio" class="letra">Inicio</a></li>
        <li><a id="btn_nos" class="letra" href="web/nosotros/" onclick="focusMethod()">Nosotros</a></li>
        <li><a id="btn_gal" class="letra" href="web/galeria/">Galería</a></li>
        <li><a id="btn_prog" class="letra" href="web/programas/">Programas</a></li>
        <li><a id="btn_cont" class="letra" href="web/contacto/">Contacto</a></li>
        <li>
          <div id="login-content">
            <form action="./inscripciones/">
              <button class="waves-effect waves-light" id="tool" type="submit"><strong>INICIAR SESION</strong></button>
            </form>
           </div> 
         </li>
      </ul>
    </div>
  </nav>
</div>

      <header>
     <div class="parallax-container" id="container_parallax">
        <div class="parallax"><img class="responsive-img" src="public\imagenes\logos\mujer-emprendedora.jpg"></div>
        <div class="container" id="enca_index"><h3 id="t_enca_index">INSTITUTO MUNICIPAL DE LA MUJER</h3>
          <h5 class="light" id="slogan_index">H. AYUNTAMIENTO DE ECATZINGO</h5></div>
      </div>
      </header>

    <section id="inicio">
     <div class="row">
          <!--Intramuros-->
        <div class="col s12" id="art_art">
         <h5 id="titulo">Articulos de interes</h5>
        </div>
         <!--Intramuros-->
        <div class="col s12" id="articulos_vid">
          <div class="row" style="overflow-x: scroll;">
        <table>
                  <?php foreach($this->model->ListarArticulos() as $pub):?>
          <th>
                      <div class="card">
        <div class="card-image">
          <img class="imag"  src="public\imagenes\publicaciones\<?php echo $pub->__GET('imagen'); ?>">
          <span class="card-title"><p class="pub2"><?php echo $pub->__GET('titulo'); ?></p></span>
        </div>
        <div class="card-content" maxlength="500">
          <p id="pub3"><?php echo $pub->__GET('texto'); ?></p>
        </div>
        <div class="card-action">
        <a id="ver"  href="<?php echo $pub->__GET('link'); ?>" target="_blank">VER ARTICULO COMPLETO</a>
        </div>
      </div>
          </th>
                  <?php endforeach; ?> 
        </table>
      </div>
        </div>
      </div>

    </section> 

    <div class="parallax-container" id="container_parallax_med">
     <div class="parallax"><img class="responsive-img" src="public\imagenes\logos\mujeres-exito.jpg"></div>
      <div class="container" > 
           <section id="inicio">
     <div class="row">
          <!--Intramuros-->
        <div class="col s12" id="art_vid">
         <h5 id="titulo">Videos de interes</h5>
        </div>
         <!--Intramuros-->
        <div class="col s12" id="videos">
             <div class="row" style="overflow-x: scroll;">
      <table>
        <?php foreach($this->model->ListarVideos() as $vid): ?>
        <th>
          <div class="card text-white bg-primary mb-3" style="margin-top:10px; width: 350px;height: 300px;">
            <h5 class="card-title" align="center" ><p class="vid_pub"><?php echo $vid->__GET('titulo'); ?></p></h5>
            <br>
            <div class="card-body" style="margin-top: -20px;margin-left:10px;margin-right:10px;">
           <video class="responsive-video" controls>
            <source src="public\videos\<?php echo $vid->__GET('link'); ?>" type="video/mp4">
            </video>
              <br>   
            </div>
          </div>
        </th>
        <?php endforeach;?>
      </table> 
    </div>
        </div>
      </div>
    </section> 
        <section id="nos">
          <div class="row">
          <div class="col s12" id="datos">
            <div class="col s1"></div>
            <div class="nosotros_index col s10">
                <h5 class="text center-align"id="titulo">NOSOTROS</h5>
                <p class="par">La <b>sociedad mexiquense exige de su gobierno cercanía y responsabilidad</b> para lograr, con hechos, obras y acciones, mejores condiciones de vida y constante prosperidad. Por ello, en la Administración Pública del Estado de México, se impulsa la construcción de un gobierno eficiente y de resultados, cuya premisa fundamental es la generación de acuerdos y consensos para la solución de las demandas sociales.</p>
                <p class="par">El buen gobierno se sustenta en una <b>administración pública más eficiente</b> en el uso de sus recursos y más eficaz en el logro de sus propósitos. La ciudadanía es el factor principal de su atención y la solución de los problemas públicos su prioridad.</p>
                <a class="btn tooltipped waves-effect waves-light btn-small" id="con" type="submit" href="Views/nosotros"data-position="top" data-tooltip="Ver página Nosotros">CONÓCENOS</a>
        </div>
        <div class="col s1"></div>
      </div>
      </div>
    </section> 
      </div>
    </div>
     <!--contactanos--> 
      <section id="contacto">
  
<div class="row">
  <div class="col s12" id="contac">
    <div class="col s12 l4">
      <img class="imgcontacto" src="public\imagenes\logos\mujer1.jpg">
    </div>
    <div class="col s12 l4" id="corp_cen">
      <i class="material-icons"id="dat_footer">query_builder</i>
      <h6 id="dat_footer">Horario de atención</h6>
      <h6 id="str">Lunes - viernes</h6>
      <h6>15:00 - 18:00 hrs.</h6>
            <br>
            <i class="material-icons"id="dat_footer">phone</i>
            <h6 id="dat_footer">Telefono</h6>
            <h6 id="str">Las 24 horas del día, los 365 días del año.</h6>
            <h6>(01597)1091048</h6>
        </div>
        <div class="col s12 l4 "id="corp_cen">
          <i class="material-icons"id="dat_footer">location_on</i>
          <h6 id="dat_footer">Ubicación</h6>
          <h6>Plaza de la Constitucion N.1 Colonia Centro, Ecatzingo Estado de México, CP 56990</h6>
          <div class="ubica">
            <?php include "web/elements/ubica.php"; ?>
          </div>
        </div>
    </div>
</div>
    </section>
 <footer class="page-footer  #fafafa grey lighten-2">
          <div class="footer-copyright" style="color:#707070;margin-top: -20px; text-align: center">
            <div class="container">
           © 2016-2018 H.Ayuntamiento Ecatzingo, Estado de México Todos los derechos reservados.
            </div>
          </div>
        </footer>




         <script src="web/styles/js/jquery.min.js"></script>      
         <script src="web/styles/js/materialize.min.js"></script>
        <script src="web/styles/js/materialize.js"></script> 
         <script src="web/styles/js/push.min.js"></script>
         <script src="web/styles/js/menu.js"></script>
  </body>
</html>
