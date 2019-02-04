<!DOCTYPE html>
<html lang="es">
<head>
  <title>Nueva persona - Instituto Municipal de la mujer</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="stylesheet" href="../styles/css/alertify.core.css">
  <link rel="stylesheet" href="../styles/css/alertify.default.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../styles/css/main.css">
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
                      <form name="verifica" action="?c=Personas&a=Verifica" method="POST">
                        <fieldset class="text-center"><h1><strong> VERIFICA PERSONA <i class="zmdi zmdi-account"></i></strong></h1></fieldset>
                        <div style="margin-left: 280px;" class="form-group col-md-4 label-floating">
                        <label class="control-label" style="color: black;"><strong class="zmdi zmdi-search" > CLAVE INE</strong></label>
                        <input required name="ine" class="form-control text-uppercase" maxlength="18" type="text">
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
                      <form name="registro" action="?c=Personas&a=Guardar" method="POST">
                        <fieldset class="text-center"><h1><strong><i class="zmdi zmdi-account"></i> DATOS PERSONALES</string></h1></fieldset>
                        <div class="form-group col-md-4 label-floating">
                        <label class="control-label" style="color: black;"><i class="zmdi zmdi-account"> Nombre</i></label>
                        <input class="form-control text-capitalize" type="text" required name="nombres">
                      </div>
                      <div class="form-group col-md-4 label-floating">
                        <label class="control-label" style="color: black;"><i class="zmdi zmdi-account"> Apellido Paterno</i></label>
                        <input class="form-control text-capitalize" type="text" required name="paterno">
                      </div>
                      <div class="form-group col-md-4 label-floating">
                        <label class="control-label" style="color: black;"><i class="zmdi zmdi-account"> Apellido Materno</i></label>
                        <input class="form-control text-capitalize" type="text" required name="materno">
                      </div>
                      <div class="form-group col-md-4 label-floating">
                        <label class="control-label" style="color: black;"><i class="fa fa-address-card"> Clave INE</i></label>
                        <input class="form-control text-uppercase" type="text" maxlength="18" required name="ine">
                      </div>
                      <div class="form-group col-md-4 label-floating">
                        <label class="control-label" style="color: black;"><i class="fa fa-address-card"> Curp</i></label>
                        <input class="form-control text-uppercase" type="text" maxlength="18" required name="curp">
                      </div>
                      <div class="form-group col-md-4 label-floating">
                        <label class="control-label" style="color: black;"><i class="zmdi zmdi-face"> Edad</i></label>
                        <input class="form-control text-uppercase" type="number" required name="edad">
                      </div>
                      <!--<div class="form-group col-md-4 label-floating">
                            <label class="control-label">Edad</label>
                            <select class="form-control" type="text" required name="edad">
                              <option>Selecciona Edad</option>
                              <option value="10">10</option>
                              <option value="11">11</option>
                              <option>12</option>
                              <option>13</option>
                              <option>14</option>
                              <option>15</option>
                              <option>16</option>
                              <option>17</option>
                              <option>18</option>
                              <option>19</option>
                              <option>20</option>
                              <option>21</option>
                              <option>22</option>
                              <option>23</option>
                              <option>24</option>
                              <option>25</option>
                            </select>
                        </div>-->
                        <fieldset class="text-center col-md-12"><h1><strong><i class="fa fa-street-view"></i> DOMICILIO</string></h1></fieldset>
                      <div class="form-group col-md-4 label-floating">
                        <label class="control-label" style="color: black;"><i class="glyphicon glyphicon-road"> Calle</i></label>
                        <input class="form-control text-capitalize" type="text" required name="calle">
                      </div>
                      <div class="form-group col-md-4 label-floating">
                        <label class="control-label" style="color: black;"><i class="fa fa-slack"> Numero</i></label>
                        <input class="form-control text-capitalize" type="number" required name="num_exterior">
                      </div>
                      <div class="form-group col-md-4 label-floating">
                        <label class="control-label" style="color: black;"><i class="fa fa-building"> Barrio</i></label>
                        <input class="form-control text-capitalize" type="text" required name="barrio">
                      </div>
                      <div class="form-group col-md-4 label-floating">
                        <label class="control-label" style="color: black;"><i class="zmdi zmdi-directions"> Entre que calle</i></label>
                        <input class="form-control text-capitalize" type="text" required name="calle1">
                      </div>
                      <div class="form-group col-md-4 label-floating">
                        <label class="control-label" style="color: black;"><i class="zmdi zmdi-directions"> Y que calle</i></label>
                        <input class="form-control text-capitalize" type="text" required name="calle2">
                      </div>
                      <div class="form-group col-md-4 label-floating">
                        <label class="control-label" style="color: black;"><i class="fa fa-phone-square"> Teléfono</i></label>
                        <input class="form-control" type="number" maxlength="10" required name="telefono">
                      </div>
                        <fieldset class="text-center col-md-12"><h1><strong><i class="fa fa-tasks"></i> PROGRAMA</string></h1></fieldset>
                        <!--<div class="form-group">
                        <label class="control-label">Fecha Inscripcion</label>
                        <input class="form-control" type="date">
                      </div>-->
                      <div class="form-group col-md-12 label-floating">
                            <label class="control-label" style="color: black;"><i class="fa fa-tasks"> Programa</i></label>
                            <select class="form-control" type="text" required name="id_programa">
                            <option>SELECCIONA PROGRAMA</option>
                           <?php
                            foreach($this->model->ListarProgramas() as $r): 
                            ?>
                            <option value="<?php echo $r->__GET('id_programa');?>"><?php echo $r->__GET('folio_programa');?> <?php echo $r->__GET('programa');?></option>
                            <?php endforeach;?>
                            </select>
                        </div>
                        <br>
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
  <script src="../styles/js/main.js"></script>
  <script src="js/alertify.min.js"></script>

  <script>
    $.material.init();
  </script>
</body>
</html>