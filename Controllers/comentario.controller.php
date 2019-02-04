<?php

require_once '../../Models/entidad/comentario.entidad.php';
require_once '../../Models/comentario.model.php';

class ComentarioController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new ComentarioModel();
    }
        
    public function Guardar(){
        $alm = new Comentario();
        
        $alm->__SET('comentario',         $_REQUEST['comentario']);        
           $this->model->Registrar($alm);
        
        header('Location: index.php');
    }
    
   
}