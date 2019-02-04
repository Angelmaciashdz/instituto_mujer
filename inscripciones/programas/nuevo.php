<!DOCTYPE html>
<html lang="es">
<head>
  <title>Nuevo programa - Instituto Municipal de la mujer</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="stylesheet" href="../styles/css/alertify.core.css">
  <link rel="stylesheet" href="../styles/css/alertify.default.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../styles/css/main.css">
  <link rel="stylesheet" href="../styles/datepicker/jquery-ui.css">
  <link rel="stylesheet" href="../styles/datepicker/jquery-ui.structure.min.css">
  <link rel="stylesheet" href="../styles/datepicker/jquery-ui.theme.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script>function abrir(){window.open("https://mail.google.com/mail/u/0/#inbox")}</script>
  <script>function abrir2(){window.open("https://www.facebook.com/")}</script>
  <script>function abrir3(){window.open("http://www.institutodelamujer.com/")}</script>

  <script>
    function validar(){
      if (document.registro.nombre.value.length==0) {
        swal("Debe ingresar Nombre")
        document.registro.nombre.focus()
        return 0;
      }
  
      if (document.registro.apellidop.value.length==0) {
        swal("Debe Ingresar Apellido Paterno")
        document.registro.apellidop.focus()
        return 0;
      }
  
      if (document.registro.apellidom.value.length==0) {
        swal("Debe Ingresar Apellido Materno")
        document.registro.apellidom.focus()
        return 0;
      }
      if (document.registro.clave.value.length==0) {
        swal("Debe Ingresar Clave")
        document.registro.clave.focus()
        return 0;
      }
      if (document.registro.curp.value.length==0) {
        swal("Debe Ingresar CURP")
        document.registro.curp.focus()
        return 0;
      }
      if (document.registro.edad.value.length==0) {
        swal("Debe Ingresar Edad")
        document.registro.edad.focus()
        return 0;
      }
      if (document.registro.calle.value.length==0) {
        swal("Debe Ingresar Calle")
        document.registro.calle.focus()
        return 0;
      }
      if (document.registro.numero.value.length==0) {
        swal("Debe Ingresar Numero")
        document.registro.numero.focus()
        return 0;
      }

      if (document.registro.barrio.value.length==0) {
        swal("Debe Ingresar Barrio")
        document.registro.barrio.focus()
        return 0;
      }

      if (document.registro.calle1.value.length==0) {
        swal("Debe Ingresar Entre que Calle ")
        document.registro.calle1.focus()
        return 0;
      }
      if (document.registro.calle2.value.length==0) {
        swal("Debe Ingresar Y que Calle ")
        document.registro.calle2.focus()
        return 0;
      }
      if (document.registro.telefono.value.length==0) {
        swal("Debe Ingresar Telefono")
        document.registro.telefono.focus()
        return 0;
      }

      if (document.registro.folio.value.length==0) {
        swal("Debe Ingresar Folio")
        document.registro.folio.focus()
        return 0;
      }
      if (document.registro.programa.value.length==0) {
        swal("Debe Ingresar Programa")
        document.registro.programa.focus()
        return 0;
      }

      document.registro.submit();
    } 

    function verificar(){
      if (document.verifica.clave.value.length==0) {
        swal("Debe Ingresar Clave INE")
        document.verifica.clave.focus()
        return 0;
      }

      document.verifica.submit();
     } 
    </script>

</head>
<body style="
background: rgb(250,198,149); /* Old browsers */
background: -moz-linear-gradient(top, rgba(250,198,149,1) 0%, rgba(245,171,102,1) 0%, rgba(239,141,49,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top, rgba(250,198,149,1) 0%,rgba(245,171,102,1) 0%,rgba(239,141,49,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom, rgba(250,198,149,1) 0%,rgba(245,171,102,1) 0%,rgba(239,141,49,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fac695', endColorstr='#ef8d31',GradientType=0 ); /* IE6-9 */">
  
<?php include '../elements/nav.html' ?>
    <!-- Content page -->
    <!--<div class="container-fluid">
      <div class="page-header">
        <h1 class="text-titles"><i class="zmdi zmdi-face zmdi-hc-fw"></i> Users <small>Student</small></h1>
      </div>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse voluptas reiciendis tempora voluptatum eius porro ipsa quae voluptates officiis sapiente sunt dolorem, velit quos a qui nobis sed, dignissimos possimus!</p>
    </div>-->
    <div class="container-fluid">
      <div class="page-header">
        <div class="row">
        <div class="col-md-2">
              <img class="img-responsive" src="..\..\public\imagenes\logos\h3.png" style="margin-top: -30px; margin-left: 40px;  width: 120px; height: 95px;"  />
            </div>
        <div class="col-md-8"><h1 class="text-titles"><center><h1><strong>Instituto Municipal de la Mujer</strong></h1></center></h1>
          </div>
          <div class="col-md-2">
          <img class="img-responsive img-circle" src="..\..\public\imagenes\logos\logo.png" style=" margin-top: -30px;margin-left: 15px;  width: 95px; height: 95px;" />
        </div>
        </div>
      </div>
    </div>

      <!-- Formulario Verifica -->
      <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
            <div class="tab-pane fade active in" id="new">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-xs-12 col-md-10 col-md-offset-1">
                      <form name="verifica" action="?c=Programa&a=VerificaPrograma" method="POST">
                        <fieldset class="text-center"><h1><strong> VERIFICA PROGRAMA <i class="fa fa-tasks"></i></strong></h1></fieldset>
                        <div style="margin-left: 280px;" class="form-group col-md-4 label-floating">
                        <label class="control-label" style="color: black;"><strong class="zmdi zmdi-search" > FOLIO DEL PROGRAMA</strong></label>
                        <input required name="folio_programa" class="form-control text-uppercase" maxlength="18" type="text">
                      </div>
                        <p class="text-center col-md-12">
                          <button style="margin-bottom: 50px;" class="btn btn-success btn-raised btn-sm" onclick="verificar();"><i class="zmdi zmdi-search"></i> Verificar</button>
                        </p>
                      </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>

    <!-- trasfom text lowercase, uppercase, capitalize -->

    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade active in" id="new">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-xs-12 col-md-10 col-md-offset-1">
                     <fieldset class="text-center col-md-12"><h1><strong><i class="fa fa-tasks"></i> PROGRAMA</string></h1></fieldset>
                      <form class="frm-inscripcion" id="frm-inscripcion" action="?c=Programa&a=Guardar" method="post" enctype="multipart/form-data">
                      <div class="form-group col-md-4 label-floating">
                        <label class="control-label" style="color: black;"><i class="fa fa-barcode"> Folio</i></label>
                        <input class="form-control" name="folio_programa" type="text" required >
                      </div>
                         <div class="form-group col-md-4 label-floating">
                        <label class="control-label" style="color: black;"><i class="fa fa-tasks"> Programa</i></label>
                        <input class="form-control" name="programa" type="text" required>
                      </div>
                      <div class="form-group col-md-4 label-floating">
                            <label class="control-label" style="color: black;"><i class="fa fa-tasks">Tipo</i></label>
                            <select class="form-control" name="tipo_programa">
                            <option>SELECCIONA TIPO</option>
                            <?php
                            foreach($this->model->ListaTipo() as $r): 
                            ?>
                            <option value="<?php echo $r->__GET('id_tipo');?>"><?php echo $r->__GET('tipo');?></option>
                            <?php endforeach;?>
                            </select>
                        </div>
                      <div class="form-group col-md-4 label-floating">
                        <label class="control-label" style="color: black;"><i class="fa fa-address-card"> Fecha de inicio</i></label>
                        <input class="form-control " id="fecha_inicio" name="fecha_inicio" type="text" required>
                      </div>
                      <div class="form-group col-md-4 label-floating">
                        <label class="control-label" style="color: black;"><i class="fa fa-address-card"> Fecha termina</i></label>
                        <input class="form-control " id="fecha_termina" name="fecha_termina" type="text" required>
                      </div>
                      <div class="form-group col-md-4 label-floating">
                        <label class="control-label" style="color: black;"><i class="zmdi zmdi-face">Imparte</i></label>
                        <input class="form-control" type="text" min="12" max="70" required name="imparte">
                      </div>
                      <div class="col-md-4 label-floating">
                        <input type="file" class="custom-file-input" id="customFileLang" name="imagen" lang="es">
                      </div>


                        <p class="text-center col-md-12">
                          <button href="#!" class="btn btn-success btn-raised btn-sm" onclick="validar();"><i class="zmdi zmdi-floppy"></i> Registrar</button>
                        </p>    
                      </form>
                  </div>
                </div>
              </div>
            </div>
    </div>
  </section>

  <!-- Notifications area -->
  <section class="full-box Notifications-area">
    <div class="full-box Notifications-bg btn-Notifications-area"></div>
    <div class="full-box Notifications-body">
      <div class="Notifications-body-title text-titles text-center">
        Notifications <i class="zmdi zmdi-close btn-Notifications-area"></i>
      </div>
      <div class="list-group">
          <div class="list-group-item">
            <div class="row-action-primary">
                <i class="zmdi zmdi-alert-triangle"></i>
            </div>
            <div class="row-content">
                <div class="least-content">17m</div>
                <h4 class="list-group-item-heading">Tile with a label</h4>
                <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
            </div>
          </div>
          <div class="list-group-separator"></div>
          <div class="list-group-item">
            <div class="row-action-primary">
                <i class="zmdi zmdi-alert-octagon"></i>
            </div>
            <div class="row-content">
                <div class="least-content">15m</div>
                <h4 class="list-group-item-heading">Tile with a label</h4>
                <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
            </div>
          </div>
          <div class="list-group-separator"></div>
        <div class="list-group-item">
            <div class="row-action-primary">
                <i class="zmdi zmdi-help"></i>
            </div>
            <div class="row-content">
                <div class="least-content">10m</div>
                <h4 class="list-group-item-heading">Tile with a label</h4>
                <p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
            </div>
        </div>
          <div class="list-group-separator"></div>
          <div class="list-group-item">
            <div class="row-action-primary">
                <i class="zmdi zmdi-info"></i>
            </div>
            <div class="row-content">
                <div class="least-content">8m</div>
                <h4 class="list-group-item-heading">Tile with a label</h4>
                <p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
            </div>
          </div>
      </div>

    </div>
  </section>

  <!-- Dialog help -->
  <div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Help">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Help</h4>
          </div>
          <div class="modal-body">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt beatae esse velit ipsa sunt incidunt aut voluptas, nihil reiciendis maiores eaque hic vitae saepe voluptatibus. Ratione veritatis a unde autem!
              </p>
          </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary btn-raised" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> Ok</button>
            </div>
        </div>
      </div>
  </div>
  <!--====== Scripts -->
  <script src="../styles/js/jquery-3.1.1.min.js"></script>
  <script src="../styles/js/sweetalert2.min.js"></script>
  <script src="../styles/js/bootstrap.min.js"></script>
  <script src="../styles/js/material.min.js"></script>
  <script src="../styles/js/ripples.min.js"></script>
  <script src="../styles/js/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="../styles/datepicker/jquery-ui.min.js"></script>
  <script src="../styles/js/main.js"></script>
  <script src="../styles/js/alertify.min.js"></script>

  <script>
    $.material.init();
  </script>
</body>
</html>