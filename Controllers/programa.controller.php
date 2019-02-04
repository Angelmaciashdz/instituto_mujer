<?php
require_once '../../Models/entidad/programa.entidad.php';
require_once '../../Models/programa.model.php';

class ProgramaController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new ProgramaModel();
    }
    
    public function Index(){
    require_once '../elements/nav.html';
    require_once 'programas.php';
       require_once '../elements/footer.html';
    }
}

