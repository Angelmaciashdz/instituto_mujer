<?php

        session_start();

        include("../../db/conecta.php");

        if(isset($_SESSION['id_usuario'])) {
          //echo "Sesion exitosa";
          //echo "<a href='cerrar_sesion.php'>Cerrar Sesion<a/>";
        }
        else{
          header("location:../../index.php");
        }

require_once '../../Controllers/s_inicio.controller.php';
require_once '../../Controllers/s_personas.controller.php';
require_once '../../Controllers/s_programa.controller.php';
// Ruta del proyecto, cambiala por la ruta que vas a usar
define( 'RUTA_HTTP', 'http://localhost/instituto_mujer/inscripciones/personas' );

// Todo esta lógica hara el papel de un FrontController
if(!isset($_REQUEST['c'])){
    $inicio = ucwords('personas') . 'Controller';
    $inicio = new PersonasController();
    $inicio->Index(); 
} else {

    
    // Obtenemos el controlador que queremos cargar
    $controller = $_REQUEST['c'] . 'Controller';
    $accion     = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';
    
    
    // Instanciamos el controlador
    $controller = new $controller();
    
    // Llama la accion
    call_user_func( array( $controller, $accion ) );
}?>