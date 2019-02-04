

<?php
require_once '../../Models/entidad/s_persona.entidad.php';
require_once '../../Models/entidad/s_programa.entidad.php';
require_once '../../Models/s_inicio.model.php';

class InicioController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new InicioModel();
    }
    
    public function Index(){
        require_once 'inicio.php';
    }


    
}