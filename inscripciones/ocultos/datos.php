
<!DOCTYPE html>
<html lang="es">

  <head>
    <title>R</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../styles/js/alerty.min.js"></script>

    <link rel="stylesheet" href="../styles/css/alerty.core.css">
    <link rel="stylesheet" href="../styles/css/alerty.default.css">
    
    <!--<script>
        swal("Good job!", "You clicked the button!", "success");
    </script>-->
    <script type="text/javascript" >
        function confirmation(){
            if (confirm("Desea Eliminar El Registro?"))
            {
                return true;
            }
                return false; 
        }
    </script>

  </head>

  <body>
<table class='table table-hover text-center'>
                    <thead class='bg-success'>
                        <tr>
                            <th class='text-center'>No</th>
                            <th class='text-center'>Folio</th>
                            <th class='text-center'>Apellido_Paterno</th>
                            <th class='text-center'>Apellido_Materno</th>
                            <th class='text-center'>Nombre</th>
                            <th class='text-center'>Telefono</th>
                            <th class='text-center'>Barrio</th>
                            <th class='text-center'>Calle</th>
                            <th class='text-center'>Numero</th>
                            <!--<th colspan='2' class='text-center'>Entre Calle y que Calle</th>-->
                            <th class='text-center'>Curp</th>
                            <th class='text-center'>CLAVE INE</th>
                            <th class='text-center'>Edad</th>
                            <th class='text-center'>Programa</th>
                            <th class='text-center'>Acutalizar</th>
                            <th class='text-center'>Eliminar</th>
                        </tr>
                    </thead>
                    </tbody>
                    <?php if (isset($_POST['consulta'])) {
                          require("../../db/conecta.php");
                       
        $q= $_POST['consulta'];

        $q_i = $db->prepare("SELECT personas.id_persona,programa.folio_programa as folio,personas.paterno,personas.materno,personas.nombres,personas.edad,personas.curp,personas.ine,domicilio.calle,domicilio.num_exterior,domicilio.num_int,domicilio.calle1,domicilio.calle2,domicilio.barrio,programa.programa,personas.telefono,personas.fecha_ingreso from personas,programa,domicilio WHERE  personas.nombres LIKE ?  OR personas.paterno LIKE ? OR personas.curp LIKE ? OR personas.ine LIKE ? AND personas.id_domicilio=domicilio.id_domicilio  AND personas.id_programa=programa.id_programa limit 1");
        $q_i->bindValue(1,"%{$q}%", PDO::PARAM_STR);
        $q_i->bindValue(2,"%{$q}%", PDO::PARAM_STR);
        $q_i->bindValue(3,"%{$q}%", PDO::PARAM_STR);
        $q_i->bindValue(4,"%{$q}%", PDO::PARAM_STR);
        $q_i->execute();
        $q_r = $q_i->fetchAll(PDO::FETCH_ASSOC);

    if (count($q_r)>0) {
                    $cont=0;
        foreach ($q_r as $fila) {
            ++$cont;?>
<tr>
                        <td style="text-transform: uppercase;"><?php echo $cont; ?></td>
                        <td style="text-transform: uppercase;"><?php echo $fila['folio']; ?></td>
                        <td style="text-transform: uppercase;"><?php echo $fila['paterno']; ?></td>
                        <td style="text-transform: uppercase;"><?php echo $fila['materno']; ?></td>
                        <td style="text-transform: uppercase;"><?php echo $fila['nombres']; ?></td>
                        <td style="text-transform: uppercase;"><?php echo $fila['telefono']; ?></td>
                        <td style="text-transform: uppercase;"><?php echo $fila['barrio']; ?></td>
                        <td style="text-transform: uppercase;"><?php echo $fila['calle']; ?></td>
                        <td style="text-transform: uppercase;"><?php echo $fila['num_exterior']; ?></td>
                        <td style="text-transform: uppercase;"><?php echo $fila['curp']; ?></td>
                        <td style="text-transform: uppercase;"><?php echo $fila['ine']; ?></td>
                        <td style="text-transform: uppercase;"><?php echo $fila['edad']; ?></td>
                        <td style="text-transform: uppercase;"><?php echo $fila['programa']; ?></td>
                       <td style="text-transform: uppercase;"><a href='?c=Personas&a=Consulta&id_persona=<?php echo $fila['id_persona']; ?>' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                        <td style="text-transform: uppercase;"><a href='?c=Personas&a=EliminarPersona&id_persona=<?php echo $fila['id_persona']; ?>' class='btn btn-danger btn-raised btn-xs' onclick='return confirmation()'><i class='zmdi zmdi-delete'></i></a></td>


                      </tr>
            <?php
        }

    }else{
        ?><h1 class='text-center'><strong> NO HAY REGISTROS QUE COINCIDADAN CON LA BUSQUEDA <i class='zmdi zmdi-account'> </i></strong></h1><?php 
    }
                        # code...
                    } else {
$cont=0;
foreach($this->model->ListarPersonas1() as $list):
  ++$cont;?>
                    <tr>
                        <td><?php echo $cont ?></td>
                        <td style="text-transform: uppercase;"><?php echo $list->__GET('folio'); ?></td>
                        <td style="text-transform: uppercase;"><?php echo $list->__GET('paterno'); ?></td>
                        <td style="text-transform: uppercase;"><?php echo $list->__GET('materno'); ?></td>
                        <td style="text-transform: uppercase;"><?php echo $list->__GET('nombres'); ?></td>
                        <td style="text-transform: uppercase;"><?php echo $list->__GET('telefono'); ?></td>
                        <td style="text-transform: uppercase;"><?php echo $list->__GET('barrio'); ?></td>
                        <td style="text-transform: uppercase;"><?php echo $list->__GET('calle'); ?></td>
                        <td style="text-transform: uppercase;"><?php echo $list->__GET('num_exterior'); ?></td>
                        <td style="text-transform: uppercase;"><?php echo $list->__GET('curp'); ?></td>
                        <td style="text-transform: uppercase;"><?php echo $list->__GET('ine'); ?></td>
                        <td style="text-transform: uppercase;"><?php echo $list->__GET('edad'); ?></td>
                        <td style="text-transform: uppercase;"><?php echo $list->__GET('programa'); ?></td>
                        <td><a href='?c=Personas&a=Consulta&id_persona=<?php echo $list->__GET('id_persona'); ?>' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                        <td><a href='?c=Personas&a=EliminarPersona&id_persona=<?php echo $list->__GET('id_persona'); ?>' class='btn btn-danger btn-raised btn-xs' onclick='return confirmation()'><i class='zmdi zmdi-delete'></i></a></td>

                    </tr>
                 <?php endforeach; 
                    }
                     ?> 
             </table>

  </body>

</html>


  