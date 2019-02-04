<?php
require_once '../../Models/entidad/s_programa.entidad.php';
require_once '../../Models/entidad/s_tipo.entidad.php';
require_once '../../Models/programa.model.php';

class ProgramaController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new ProgramaModel();
    }
    
    public function Index(){
 
    require_once 'programas.php';
    }
       public function Nuevo(){
    
        require_once '../programas/nuevo.php';
    }

     public function GeneraPdf(){
    
        require_once '../programas/genera_pdf.php';
    }
    public function GeneraXls(){
    
        require_once '../programas/genera_xls.php';
    }
 public function DescPdf(){
        $alm = new Programa();

        if(isset($_REQUEST['id_programa'])){
         if ($_REQUEST['id_programa']>0) {
       $alm = $this->model->DatosPrograma($_REQUEST['id_programa']);
          $alm1 = $this->model->TotalesDoc($_REQUEST['id_programa']);
          $alm2 = $this->model->PersonasDoc($_REQUEST['id_programa']);
         require_once '../programas/pdf_programas.php';
         } else {
           require_once '../programas/pdf_general.php';
         }
         
       }
        
    }

     public function DescXls(){
        $alm = new Programa();
        
        if(isset($_REQUEST['id_programa'])){

        }  
          require_once '../programas/excel.php';
      
    }



       public function ObtenDatos(){
        $alm = new Programa();
        
        if(isset($_REQUEST['id_programa'])){
            $alm = $this->model->DatosPrograma($_REQUEST['id_programa']);
        }
       
        require_once 'editar.php';
    }

      


    public function VerificaPrograma(){
      $alm =new Programa();
      if (isset($_REQUEST['folio_programa'])) {
        $alm = $this->model->VerificarPrograma($_REQUEST['folio_programa']);
      }
      include '../programas/nuevo.php';
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

        $this->model->ActPrograma($alm);
      
        header('Location: index.php');
}



     public function Elimina(){
        $alm = new Programa();
            $alm = $this->model->EliminaPrograma($_REQUEST['id_programa']);       
                header('Location: index.php');
    }
}

