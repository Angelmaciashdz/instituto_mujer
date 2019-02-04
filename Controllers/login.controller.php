<?php
require_once '../Models/entidad/users.entidad.php';
require_once '../Models/login.model.php';

class LoginController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new LoginModel();
    }
    
    public function Index(){
 
    require_once 'login/datos.php';
    }
 public function Inicia_sesion(){
        $alm = new Login();
        
        if(isset($_REQUEST['usuario'])&&isset($_REQUEST['password'])){
            $alm = $this->model->Login_sesion($_REQUEST['usuario'],$_REQUEST['password']);
            
        }  
          

    }
 
}

