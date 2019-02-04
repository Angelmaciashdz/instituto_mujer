<?php
require_once '../../Controllers/galeria.controller.php';

// Ruta del proyecto, cambiala por la ruta que vas a usar
define( 'RUTA_HTTP', 'http://www.institutomujer.com/web/galeria/' );

// Todo esta lógica hara el papel de un FrontController
if(!isset($_REQUEST['c'])){
    $controller = new GaleriaController();
    $controller->Index();    
} else {
    
    // Obtenemos el controlador que queremos cargar
    $controller = $_REQUEST['c'] . 'Controller';
    $accion     = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';
    
    
    // Instanciamos el controlador
    $controller = new $controller();
    
    // Llama la accion
    call_user_func( array( $controller, $accion ) );
}?>
