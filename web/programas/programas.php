<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="utf-8">
  <title>Programas - Instituto Municipal de la mujer</title>
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
    <link rel="stylesheet" href="../styles/css/materialize.min.css"/>
       <link type="text/css" rel="stylesheet" href="../styles/css/web.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!--JavaScript at end of body for optimized loading-->
<script language=JavaScript>
function window_onload() {

}
</script>
</head>
<body language=JavaScript onload="activeProg()">
      <header>
     <div class="parallax-container" id="container_parallax">
        <div class="parallax"><img class="responsive-img" src="..\..\public\imagenes\logos\programas.jpg"></div>
        <div class="container" id="enca_programas"><h3 id="t_enca_programas">PROGRAMAS</h3></div>
      </div>
      </header>

    <section id="inicio">
     <div class="row">
          <!--Intramuros-->
        <div class="col s12" id="t_programas">
         <h5 id="titulo">Nuestros programas</h5>
        </div>
         <!--Intramuros-->
        <div class="col s12" id="v_programas">
      <div class="row" id="tabla_curso">
        <table>
          <th>
                            <?php foreach($this->model->ListarProgramasWeb() as $r):?>
   <div class="col s12 m4 l4">
                      <div class="card">
        <div class="card-image">
         <img class="imag2" src="..\..\public\imagenes\programas\<?php echo $r->__GET('imagen'); ?>">
        </div>
        <div class="card-content2" maxlength="500">
          <p class="pub3"> <?php echo $r->__GET('programa');?></p>
          <p class="pub_dat">Imparte: <?php echo $r->__GET('imparte');?></p>
          <p class="pub_dat">Inicia <?php echo $r->__GET('fecha_inicio');?> Costo: $70 MXN</p>
        </div>
      </div>
   </div>
                  <?php endforeach; ?> 
                  </th>

        </table>
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
 

    <script src="../styles/js/jquery.min.js"></script>
     <script src="../styles/js/jquery.validate.min.js"></script>
      <script src="../styles/js/materialize.min.js"></script>
        <script src="../styles/js/materialize.js"></script>
        <script src="../styles/js/push.min.js"></script>
  

 <?php  include "../styles/js/valida.js"; ?>
       <script src="../styles/js/menu.js"></script>

</body>
</html>