<?php
require_once '../../Models/entidad/galeria.entidad.php';
require_once '../../Models/entidad/galeria1.entidad.php';
require_once '../../Models/entidad/programa.entidad.php';
require_once '../../Models/galeria.model.php';


class GaleriaController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new GaleriaModel();
    }
    
    public function Index(){
    require_once '../elements/nav.html';
    require_once 'actividades.php';
       require_once '../elements/footer.html';
    }
}