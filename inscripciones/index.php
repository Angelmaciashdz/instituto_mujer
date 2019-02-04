<?php
require_once '../Controllers/login.controller.php';

define( 'RUTA_HTTP', 'http://localhost/instituto_mujer/inscripciones/' );

if(!isset($_REQUEST['c'])){
    $inicio = ucwords('login') . 'Controller';
    $inicio = new LoginController();
    $inicio->Index(); 
} else {


    $controller = $_REQUEST['c'] . 'Controller';
    $accion     = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';

    $controller = new $controller();
    
    call_user_func( array( $controller, $accion ) );
}?>