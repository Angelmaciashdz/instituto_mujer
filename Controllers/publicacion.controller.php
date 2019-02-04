
<?php
require_once 'Models/entidad/articulo.entidad.php';
require_once 'Models/entidad/video.entidad.php';
require_once 'Models/entidad/slider.entidad.php';
require_once 'Models/publicacion.model.php';

class PublicacionController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new PublicacionModel();
    }
    
    public function Index(){
        require_once 'web/inicio/inicio.php';
    }
}