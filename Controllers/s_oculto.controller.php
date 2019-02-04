<?php
require_once '../../Models/entidad/s_persona.entidad.php';
require_once '../../Models/entidad/s_tipo.entidad.php';
require_once '../../Models/s_personas.model.php';

class OcultoController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new PersonasModel();
    }
    
    public function Index(){
 
    require_once 'datos.php';
    }
       public function Nuevo(){
    
        require_once '../programas/nuevo.php';
    }
 public function DescPdf(){
    
        require_once '../programas/pdf_programas.php';
    }

  public function DescXls(){
        require_once '../programas/xls_programas.php';
    }

       public function ObtenDatos(){
        $alm = new Programa();
        
        if(isset($_REQUEST['id_programa'])){
            $alm = $this->model->DatosPrograma($_REQUEST['id_programa']);
        }
       
        require_once 'editar.php';
    }





        public function Guardar(){
        $alm = new Programa();
        
        $alm->__SET('folio_programa',  $_REQUEST['folio_programa']);
        $alm->__SET('programa',        $_REQUEST['programa']);
        $alm->__SET('tipo_programa',   $_REQUEST['tipo_programa']);
        $alm->__SET('fecha_inicio',    $_REQUEST['fecha_inicio']);
        $alm->__SET('fecha_termina',   $_REQUEST['fecha_termina']);
        $alm->__SET('imparte',         $_REQUEST['imparte']);
        $alm->__SET('imagen',          $_REQUEST['imagen']);

         if( !empty( $_FILES['imagen']['name'] ) ){
            $nombre=$_FILES['imagen']['name'];
            $tipo=$_FILES['imagen']['type'];
            $tamano=$_FILES['imagen']['size'];

if (($nombre== !NULL) && ($_FILES['imagen']['size'] <= 600000)) {
  if (($_FILES["imagen"]["type"] == "image/gif")
   || ($_FILES["imagen"]["type"] == "image/jpeg")
   || ($_FILES["imagen"]["type"] == "image/jpg")
   || ($_FILES["imagen"]["type"] == "image/png"))
   {
   $directorio = 'C:\xampp\htdocs\instituto_mujer\public\imagenes\programas/';
      // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
      move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$nombre);
         $alm->__SET('imagen', $nombre);
}
 else 
    {
       //si no cumple con el formato
       echo "No se puede subir una imagen con ese formato ";
    }
} 
else 
{
   //si existe la variable pero se pasa del tamaño permitido
   if($nombre == !NULL) echo "La imagen es demasiado grande "; 
}

$this->model->RegistraPrograma($alm);
      
        header('Location: index.php');

    
    }
 
}


 public function Actualiza(){
        $alm = new Programa();
        
        $alm->__SET('id_programa',     $_REQUEST['id_programa']);
        $alm->__SET('folio_programa',  $_REQUEST['folio_programa']);
        $alm->__SET('programa',        $_REQUEST['programa']);
        $alm->__SET('tipo_programa',   $_REQUEST['tipo_programa']);
        $alm->__SET('fecha_inicio',    $_REQUEST['fecha_inicio']);
        $alm->__SET('fecha_termina',   $_REQUEST['fecha_termina']);
        $alm->__SET('imparte',         $_REQUEST['imparte']);
        $alm->__SET('imagen',          $_REQUEST['imagen']);

         if( !empty( $_FILES['imagen']['name'] ) ){
            $nombre=$_FILES['imagen']['name'];
            $tipo=$_FILES['imagen']['type'];
            $tamano=$_FILES['imagen']['size'];

if (($nombre== !NULL) && ($_FILES['imagen']['size'] <= 600000)) {
  if (($_FILES["imagen"]["type"] == "image/gif")
   || ($_FILES["imagen"]["type"] == "image/jpeg")
   || ($_FILES["imagen"]["type"] == "image/jpg")
   || ($_FILES["imagen"]["type"] == "image/png"))
   {
   $directorio = 'C:\xampp\htdocs\Proyecto2\multimedia\imagenes\programas/';
      // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
      move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$nombre);
         $alm->__SET('imagen', $nombre);
}
 else 
    {
       //si no cumple con el formato
       echo "No se puede subir una imagen con ese formato ";
    }
} 
else 
{
   //si existe la variable pero se pasa del tamaño permitido
   if($nombre == !NULL) echo "La imagen es demasiado grande "; 
}

$this->model->ActPrograma($alm);
      
        header('Location: index.php');

    
    }
}



     public function Elimina(){
        $alm = new Programa();
            $alm = $this->model->EliminaPrograma($_REQUEST['id_programa']);       
                header('Location: index.php');
    }
}

