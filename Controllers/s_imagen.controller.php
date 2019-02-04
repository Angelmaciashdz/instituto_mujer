<?php
require_once 'Models/entidad/imagen.entidad.php';
require_once 'Models/imagen.model.php';
class ImagenController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new ImagenModel();
    }
    
    public function Index(){	
    require_once 'Views/principal/principal.php';

    }
}