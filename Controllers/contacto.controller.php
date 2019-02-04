<?php
require_once '../../Models/contacto.model.php';
class ContactoController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new ContactoModel();
    }
    
    public function Index(){
    require_once '../elements/nav.html';
    require_once 'contacto.php';
    require_once '../elements/footer.html';
    }
}