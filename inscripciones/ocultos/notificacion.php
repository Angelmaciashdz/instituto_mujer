<?php
You are not allowed to view links.
 Register or Login('Content-Type: application/json'); //mediante header establece que es un archivo json
$id=$_REQUEST['id_preinscripcion']; //obtiene la variable id por post o get
 
function conecta(){
        $mysqli = new mysqli("localhost", "root", "", "instituto_mujer"); //conexión ala base de datos por medio de misqli poo
        
        if($mysqli->connect_errno > 0){ //si retorna algun error
                return("Imposible conectarse con la base de datos [" . $mysqli->connect_error . "]"); //se muestra el error
        }else{ //si no retorna el error
                $mysqli->query("SET NAMES 'utf8'"); //codifica las consultas a utf-8
                return $mysqli; //retorna la conexión a la base de datos mysql
        }
}
 
 
$mysqli = conecta(); //conecta la base de datos
$verifica = $mysqli->query("SELECT preinscripcion.id_preinscripcion,preinscripcion.paterno,preinscripcion.materno,preinscripcion.nombres,preinscripcion.edad,preinscripcion.curp,domicilio.calle,domicilio.num_exterior,domicilio.num_int,domicilio.calle1,domicilio.calle2,domicilio.barrio_colonia,programa.programa,preinscripcion.telefono,preinscripcion.fecha_ingreso from preinscripcion,programa,domicilio where preinscripcion.id_domicilio=domicilio.id_domicilio and preinscripcion.id_programa= programa.id_programa and preinscripcion.estado=1 order by preinscripcion.id_preinscripcion DESC"); //consulta los mensajes no leidos=0 y activos=1 del propietario
$num_msg = $verifica->num_rows; //verifica el numero de mensajes
 
if($num_msg > 0){ // si el numero de mensajes es mayor a 0
 
        while ($datos = You are not allowed to view links.
 Register or Login($verifica, MYSQLI_ASSOC)) { //genera el while para recorrer todos los mensajes
                
                $msg[]=You are not allowed to view links.
 Register or Login('num_msg'=>$num_msg,'paterno'=>$datos['paterno'],'materno'=>$datos['materno'],'nombres'=>$datos['nombres'],'programa'=> $datos['programa']); //los almacena en un arreglo de arreglos
                $mysqli->query("UPDATE preinscripcion SET estado='1' WHERE  id_preinscripcion = '".$datos['id']."'"); //hace el update de mensaje leido
                
        ]
        
}else{ //si no hay información retorna un array vacio que posteriormente se convertira a un json nulo
        
        $msg[]=You are not allowed to view links.
 Register or Login('num_msg'=>$num_msg,'paterno'=>$datos['paterno'],'materno'=>$datos['materno'],'nombres'=>$datos['nombres'],'programa'=> $datos['programa']);
        
}
 
echo You are not allowed to view links.
 Register or Login($msg,JSON_PRETTY_PRINT); //lo codifica a json, JSON_PRETTY_PRINT lo hace agradable a la vista
 
 
?>