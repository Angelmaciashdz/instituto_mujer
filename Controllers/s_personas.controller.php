

<?php
require_once '../../Models/entidad/s_persona.entidad.php';
require_once '../../Models/entidad/s_programa.entidad.php';
require_once '../../Models/s_personas.model.php';

class PersonasController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new PersonasModel();
    }
    
    public function Index(){
        require_once 'personas.php';
    }

    

 public function DescPdf(){
    
        require_once '../personas/pdf.php';
    }
       public function Nuevo(){
    
        require_once '../personas/nuevo.php';
    }
   public function Consulta(){
        $alm = new Persona();
        
        if(isset($_REQUEST['id_persona'])){
            $alm = $this->model->DatosPersona($_REQUEST['id_persona']);
        }
       
        require_once 'editar.php';
    }
     public function BuscarPersona(){
        $alm = new Persona();
        
        if(isset($_REQUEST['consulta'])){
            $alm = $this->model->DatosPersonaLike($_REQUEST['consulta']);
        }
       
        require_once 'editar.php';
    }

        public function Verifica(){
        $alm = new Persona();
        if (isset($_REQUEST['ine'])) {
        $alm = $this->model->VerificaIne($_REQUEST['ine']);       
        } 
        include '../personas/nuevo.php';
    }
    public function Guardar(){
        $alm = new Persona();
        

        $alm->__SET('paterno',         $_REQUEST['paterno']);
        $alm->__SET('materno',         $_REQUEST['materno']);
        $alm->__SET('nombres',         $_REQUEST['nombres']);
        $alm->__SET('edad',            $_REQUEST['edad']);
        $alm->__SET('curp',            $_REQUEST['curp']);
        $alm->__SET('ine',             $_REQUEST['ine']);
        $alm->__SET('calle',           $_REQUEST['calle']);
        $alm->__SET('num_exterior',    $_REQUEST['num_exterior']);
        $alm->__SET('num_int',         $_REQUEST['num_int']);
        $alm->__SET('calle1',          $_REQUEST['calle1']);
        $alm->__SET('calle2',          $_REQUEST['calle2']);
        $alm->__SET('barrio',          $_REQUEST['barrio']);
        $alm->__SET('id_programa',     $_REQUEST['id_programa']);
        $alm->__SET('telefono',        $_REQUEST['telefono']);
               $this->model->RegistraDomi($alm);
               $this->model->RegistraPersona($alm);
        include 
        header('Location: index.php');
    }


 public function Guardar2(){
        $alm = new Persona();
        

        $alm->__SET('paterno',         $_REQUEST['paterno']);
        $alm->__SET('materno',         $_REQUEST['materno']);
        $alm->__SET('nombres',         $_REQUEST['nombres']);
        $alm->__SET('edad',            $_REQUEST['edad']);
        $alm->__SET('curp',            $_REQUEST['curp']);
        $alm->__SET('ine',             $_REQUEST['ine']);
        $alm->__SET('calle',           $_REQUEST['calle']);
        $alm->__SET('num_exterior',    $_REQUEST['num_exterior']);
        $alm->__SET('num_int',         $_REQUEST['num_int']);
        $alm->__SET('calle1',          $_REQUEST['calle1']);
        $alm->__SET('calle2',          $_REQUEST['calle2']);
        $alm->__SET('barrio_colonia',  $_REQUEST['barrio_colonia']);
        $alm->__SET('id_programa',        $_REQUEST['id_programa']);
        $alm->__SET('telefono',        $_REQUEST['telefono']);
        $alm->__SET('id_preinscripcion',$_REQUEST['id_preinscripcion']);
        $alm->__SET('domicilio',        $_REQUEST['domicilio']);
        $this->model->RegistraPersona2($alm);
        $this->model->ActDom($alm);
        $this->model->EliminaPre($_REQUEST['id_preinscripcion']);


        include 
        header('Location: index.php');
    }



    public function Actualizar(){
        $alm = new Persona();
        $alm->__SET('id_persona',      $_REQUEST['id_persona']);
        $alm->__SET('paterno',         $_REQUEST['paterno']);
        $alm->__SET('materno',         $_REQUEST['materno']);
        $alm->__SET('nombres',         $_REQUEST['nombres']);
        $alm->__SET('edad',            $_REQUEST['edad']);
        $alm->__SET('curp',            $_REQUEST['curp']);
        $alm->__SET('ine',             $_REQUEST['ine']);
        $alm->__SET('calle',           $_REQUEST['calle']);
        $alm->__SET('num_exterior',    $_REQUEST['num_exterior']);
        $alm->__SET('calle1',          $_REQUEST['calle1']);
        $alm->__SET('calle2',          $_REQUEST['calle2']);
        $alm->__SET('barrio',          $_REQUEST['barrio']);
        $alm->__SET('id_programa',     $_REQUEST['id_programa']);
        $alm->__SET('telefono',        $_REQUEST['telefono']);
               $this->model->Actualiza($alm);
        header('Location: index.php');
    }

 public function EliminarPersona(){
        $alm = new Persona();
            $alm = $this->model->EliminaPer($_REQUEST['id_persona']);       
                header('Location: index.php');
    }

    
}