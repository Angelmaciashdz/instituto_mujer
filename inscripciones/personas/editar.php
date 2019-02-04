<!DOCTYPE html>
<html lang="es">
<head>
  <title>Ver datos - Instituto Municipal de la mujer</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="shortcut icon" href="favicon.ico">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="../styles/js/alerty.min.js"></script>
  <link rel="stylesheet" href="../styles/css/main.css">
  <link rel="stylesheet" href="../styles/css/alerty.core.css">
  <link rel="stylesheet" href="../styles/css/alerty.default.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script>function abrir(){window.open("https://mail.google.com/mail/u/0/#inbox")}</script>
  <script>function abrir2(){window.open("https://www.facebook.com/")}</script>
  <script>function abrir3(){window.open("http://www.institutodelamujer.com/")}</script>


</head>
<body style="/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#fac695+0,f5ab66+0,ef8d31+100;Orange+3D+%232 */
background: rgb(250,198,149); /* Old browsers */
background: -moz-linear-gradient(top, rgba(250,198,149,1) 0%, rgba(245,171,102,1) 0%, rgba(239,141,49,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top, rgba(250,198,149,1) 0%,rgba(245,171,102,1) 0%,rgba(239,141,49,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom, rgba(250,198,149,1) 0%,rgba(245,171,102,1) 0%,rgba(239,141,49,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fac695', endColorstr='#ef8d31',GradientType=0 ); /* IE6-9 */">
<?php include '../elements/nav.html' ?>
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
    <br>

      <!-- Formulario Update -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade active in" id="new">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-xs-12 col-md-10 col-md-offset-1">
                      <form name="registro" action="?c=Personas&a=Actualizar" method="POST">

                        <fieldset class="text-center"><h1><strong><i class="zmdi zmdi-account"></i> DATOS PERSONALES</string></h1></fieldset>
                        <div class="form-group col-md-4 label-floating">
                        <label class="control-label" style="color: black;"><i class="zmdi zmdi-account"> Nombre</i></label>
                         <input class="form-control text-capitalize" type="hidden" required name="id_persona" value="<?php echo $alm->__GET('id_persona'); ?>">
                        <input class="form-control text-capitalize" type="text" required name="nombres" value="<?php echo $alm->__GET('nombres'); ?>">

                      </div>
                      <div class="form-group col-md-4 label-floating">
                        <label class="control-label" style="color: black;"><i class="zmdi zmdi-account"> Apellido Paterno</i></label>
                        <input class="form-control text-capitalize" type="text" required name="paterno" value="<?php echo $alm->__GET('paterno'); ?>">
                      </div>
                      <div class="form-group col-md-4 label-floating">
                        <label class="control-label" style="color: black;"><i class="zmdi zmdi-account"> Apellido Materno</i></label>
                        <input class="form-control text-capitalize" type="text" required name="materno" value="<?php echo $alm->__GET('materno'); ?>">
                      </div>
                      <div class="form-group col-md-4 label-floating">
                        <label class="control-label" style="color: black;"><i class="fa fa-address-card"> Clave INE</i></label>
                        <input class="form-control text-uppercase" type="text" maxlength="18" required name="ine" value="<?php echo $alm->__GET('ine'); ?>">
                      </div>
                      <div class="form-group col-md-4 label-floating">
                        <label class="control-label" style="color: black;"><i class="fa fa-address-card"> Curp</i></label>
                        <input class="form-control text-uppercase" type="text" maxlength="18" required name="curp" value="<?php echo $alm->__GET('curp'); ?>">
                      </div>
                      <div class="form-group col-md-4 label-floating">
                        <label class="control-label" style="color: black;"><i class="zmdi zmdi-face"> Edad</i></label>
                        <input class="form-control" type="number" required name="edad" value="<?php echo $alm->__GET('edad'); ?>">
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
                        <input class="form-control text-capitalize" type="text" required name="calle" value="<?php echo $alm->__GET('calle'); ?>">
                      </div>
                      <div class="form-group col-md-4 label-floating">
                        <label class="control-label" style="color: black;"><i class="fa fa-slack"> Numero</i></label>
                        <input class="form-control" type="number"required name="num_exterior" value="<?php echo $alm->__GET('num_exterior'); ?>">
                      </div>
                      <div class="form-group col-md-4 label-floating">
                        <label class="control-label" style="color: black;"><i class="fa fa-building"> Barrio</i></label>
                        <input class="form-control text-capitalize" type="text" required name="barrio" value="<?php echo $alm->__GET('barrio'); ?>">
                      </div>
                      <div class="form-group col-md-4 label-floating">
                        <label class="control-label" style="color: black;"><i class="zmdi zmdi-directions"> Entre que calle</i></label>
                        <input class="form-control text-capitalize" type="text" required name="calle1" value="<?php echo $alm->__GET('calle1'); ?>">
                      </div>
                      <div class="form-group col-md-4 label-floating">
                        <label class="control-label" style="color: black;"><i class="zmdi zmdi-directions"> Y que calle</i></label>
                        <input class="form-control text-capitalize" type="text" required name="calle2" value="<?php echo $alm->__GET('calle2'); ?>">
                      </div>
                      <div class="form-group col-md-4 label-floating">
                        <label class="control-label" style="color: black;"><i class="fa fa-phone-square"> Teléfono</i></label>
                        <input class="form-control" type="text" maxlength="10" required name="telefono" value="<?php echo $alm->__GET('telefono'); ?>">
                      </div>
                        <fieldset class="text-center col-md-12"><h1><strong><i class="fa fa-tasks"></i> PROGRAMA</string></h1></fieldset>
                        <!--<div class="form-group">
                        <label class="control-label">Fecha Inscripcion</label>
                        <input class="form-control" type="date">
                      </div>-->
                        <div class="form-group col-md-6 label-floating">
                        <label class="control-label" style="color: black;"><i class="fa fa-barcode"> Folio</i></label>
                        <input class="form-control" type="text" disabled value="<?php echo $alm->__GET('folio'); ?>">
                      </div>
                      <div class="form-group col-md-6 label-floating">
                            <label class="control-label" style="color: black;"><i class="fa fa-tasks"> Actualizar por Tipo</i></label>
                            <select class="form-control" type="text" required name="id_programa" style="text-transform: uppercase;">
                            <option  value="<?php echo $alm->__GET('id_programa'); ?>" ><?php echo $alm->__GET('programa'); ?></option>
                            <?php
                            foreach($this->model->ListarProgramas() as $p): 
                            ?>
                            <option value="<?php echo $p->__GET('id_programa');?>"><?php echo $p->__GET('programa');?></option>
                            <?php endforeach;?>
                              

                            </select>
                        </div>
                        <br>
                        <p class="text-center col-md-12">
                          <button href="#!" class="btn btn-success btn-raised btn-sm" onclick="validar();"><i class="zmdi zmdi-refresh"></i> Actualizar</button>
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  

  <script>
    $.material.init();
  </script>
</body>
</html>