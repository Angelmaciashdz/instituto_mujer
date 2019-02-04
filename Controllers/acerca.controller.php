<?php
require_once '../../Models/acerca.model.php';
class AcercaController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new AcercaModel();
    }
    
    public function Index(){
    require_once '../elements/nav.html';
    require_once 'nosotros.php';
    require_once '../elements/footer.html';
    }
}