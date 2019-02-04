<!DOCTYPE html>
  <html>
    <head>
      <title>Galeria - Instituto Municipal de la mujer</title>
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
       <link type="text/css" rel="stylesheet" href="../styles/css/jquery.fancybox.min.css" />
 <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../styles/css/web.css" />

  </head>
  <body onload="activeGal()">
      <header>
     <div class="parallax-container"  id="container_parallax">
    <div class="parallax"><img class="responsive-img" src="..\..\public\imagenes\logos\negocios-desde-casa.jpg"></div>
        <div class="container" id="enca_galeria"><h3 id="t_enca_galeria">GALERIA</h3></div>
      </div>
      </header>
      <div class="section white">
        <section id="album">
          <div class="row">
          <!--servicios-->
          <div class="col s12" id="album">
            <div class="col s12 m12 l12">
              <div class="row"style="max-height: 450px; overflow-y: scroll;">
<div class="gallery">
    <?php foreach($this->model->ListarImagenes() as $img):
        $imageThumbURL = '../../public/imagenes/actividades/'.$img->__GET('imagen');
        $imageURL = '../../public/imagenes/actividades/'.$img->__GET("imagen");
    ?>
    <a href="<?php echo $imageURL; ?>" data-fancybox="group" data-caption="<?php echo $img->__GET("imagen") ?>" >
        <img src="<?php echo $imageThumbURL; ?>" alt="" />
    </a>
    <?php endforeach; ?> 
</div>

              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
     <!--contactanos-->
        <section id="contacto">
  
     <?php include "../elements/contacto_datos.php"; ?>
    </section>
    <footer>
      <?php  include "../elements/footer.html"; ?>  
    </footer> 


    <!--JavaScript at end of body for optimized loading-->
    
          <script src="https://use.fontawesome.com/78a03bac99.js"></script>
         <script src="../styles/js/jquery.min.js"></script>      
         <script src="../styles/js/materialize.min.js"></script>
        <script src="../styles/js/materialize.js"></script> 
         <script src="../styles/js/push.min.js"></script>
         <script src="../styles/js/jquery.fancybox.min.js"></script>
               <script src="../styles/js/galeria.js"></script>
         <script src="../styles/js/menu.js"></script>

  </body>
</html>
