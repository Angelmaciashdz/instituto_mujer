<?php
require_once '..\..\db\conexion.php';

class PersonasModel
{
	private $pdo;

	public function __CONSTRUCT()
	{
		try
		{
				$this->pdo = Conexion::StartUp();            
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function ListarPersonas1()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT programa.folio_programa as folio,personas.id_persona,personas.paterno,personas.materno,personas.nombres,personas.edad,personas.curp,personas.ine,domicilio.calle,domicilio.num_exterior,domicilio.num_int,domicilio.calle1,domicilio.calle2,domicilio.barrio,programa.programa,personas.telefono,personas.fecha_ingreso from personas,programa,domicilio where personas.id_domicilio=domicilio.id_domicilio and personas.id_programa= programa.id_programa  order by personas.id_persona DESC");
			$stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$art = new Persona();
				 $art->__SET('folio', $r->folio);	
                $art->__SET('id_persona', $r->id_persona);				
                $art->__SET('paterno', $r->paterno);
				$art->__SET('materno', $r->materno);
				$art->__SET('nombres', $r->nombres);
				$art->__SET('edad', $r->edad);
				$art->__SET('curp', $r->curp);
				$art->__SET('ine', $r->ine);
				$art->__SET('calle', $r->calle);
				$art->__SET('num_exterior', $r->num_exterior);
			    $art->__SET('num_int', $r->num_int);
				$art->__SET('calle1', $r->calle1);
				$art->__SET('calle2', $r->calle2);
				$art->__SET('barrio', $r->barrio);
				$art->__SET('programa', $r->programa);
				$art->__SET('telefono', $r->telefono);
				$art->__SET('fecha_ingreso', $r->fecha_ingreso);

				$result[] = $art;
			}

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function DatosPersona($id_persona)
	{
		try
		{


			$stm = $this->pdo->prepare("SELECT personas.id_persona,personas.paterno,personas.materno,personas.nombres,personas.edad,personas.curp,personas.ine,domicilio.calle,domicilio.num_exterior,domicilio.num_int,domicilio.calle1,domicilio.calle2,domicilio.barrio,programa.imagen,personas.id_programa,programa.id_programa,programa.folio_programa as folio,programa.programa,personas.telefono,personas.fecha_ingreso from personas,programa,domicilio where personas.id_domicilio=domicilio.id_domicilio and personas.id_programa= programa.id_programa and personas.id_persona=?");
			$stm->execute(array($id_persona));

			$r=$stm->fetch(PDO::FETCH_OBJ);
		
				$art = new Persona();
				$art->__SET('folio', $r->folio);
				$art->__SET('id_persona', $r->id_persona);
				$art->__SET('paterno', $r->paterno);
				$art->__SET('materno', $r->materno);
				$art->__SET('nombres', $r->nombres);
				$art->__SET('edad', $r->edad);
				$art->__SET('curp', $r->curp);
				$art->__SET('ine', $r->ine);
				$art->__SET('calle', $r->calle);
				$art->__SET('num_exterior', $r->num_exterior);
			    $art->__SET('num_int', $r->num_int);
				$art->__SET('calle1', $r->calle1);
				$art->__SET('calle2', $r->calle2);
				$art->__SET('barrio', $r->barrio);
				$art->__SET('programa', $r->programa);
				$art->__SET('id_programa', $r->id_programa);
				$art->__SET('imagen', $r->imagen);
				$art->__SET('telefono', $r->telefono);
				$art->__SET('fecha_ingreso', $r->fecha_ingreso);

			
		
			return $art;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function BuscarPersonaLike($consulta)
	{
		try
		{


			$stm = $this->pdo->prepare("SELECT personas.id_persona,personas.folio_persona,personas.paterno,personas.materno,personas.nombres,personas.edad,personas.curp,personas.ine,domicilio.calle,domicilio.num_exterior,domicilio.num_int,domicilio.calle1,domicilio.calle2,domicilio.barrio,programa.programa,personas.telefono,personas.fecha_ingreso from personas,programa,domicilio 
        WHERE personas.nombres LIKE ? OR personas.curp LIKE ? OR domicilio.barrio LIKE ?");
			$stm->bindValue(1,"%{$consulta}%", PDO::PARAM_STR);
			$stm->bindValue(2,"%{$consulta}%", PDO::PARAM_STR);
			$stm->bindValue(3,"%{$consulta}%", PDO::PARAM_STR);
			$stm->execute();
			$res = $stm->fetchAll();
			if (count($res)>0) {
				print_r($res);
			}else{
				echo "Nada, papú :(";
			}

			$r=$stm->fetch(PDO::FETCH_OBJ);
		
				$art = new Persona();
				$art->__SET('folio', $r->folio);
				$art->__SET('id_persona', $r->id_persona);
				$art->__SET('paterno', $r->paterno);
				$art->__SET('materno', $r->materno);
				$art->__SET('nombres', $r->nombres);
				$art->__SET('edad', $r->edad);
				$art->__SET('curp', $r->curp);
				$art->__SET('ine', $r->ine);
				$art->__SET('calle', $r->calle);
				$art->__SET('num_exterior', $r->num_exterior);
			    $art->__SET('num_int', $r->num_int);
				$art->__SET('calle1', $r->calle1);
				$art->__SET('calle2', $r->calle2);
				$art->__SET('barrio', $r->barrio);
				$art->__SET('programa', $r->programa);
				$art->__SET('id_programa', $r->id_programa);
				$art->__SET('imagen', $r->imagen);
				$art->__SET('telefono', $r->telefono);
				$art->__SET('fecha_ingreso', $r->fecha_ingreso);

			
		
			return $art;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function ListarProgramas()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM programa ORDER BY folio_programa DESC");
			$stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$art = new Programa();
				$art->__SET('id_programa', $r->id_programa);
				$art->__SET('folio_programa', $r->folio_programa);
				$art->__SET('imagen', $r->imagen);
				$art->__SET('programa', $r->programa);
				$art->__SET('fecha_inicio', $r->fecha_inicio);
				$art->__SET('imparte', $r->imparte);
				$result[] = $art;
			}

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function ListaTipo()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM tipo_programa where estado=1 ORDER BY id_tipo DESC");
			$stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$art = new Tipo();
				$art->__SET('id_tipo', $r->id_tipo);
				$art->__SET('tipo', $r->tipo);
				$result[] = $art;
			}

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
//Verificar ine//
		public function VerificaIne($ine)
	{
		try
		{


			$stm = $this->pdo->prepare("SELECT count(id_persona) FROM personas WHERE ine=?");
			$stm->execute(array($ine));

			$r=$stm->fetchColumn();
			if ($r>0) {
      echo "<script>
        alert('ESTE REGISTRO YA EXISTE');       
        </script>";
        } else {
              echo "<script>
        alert('ESTE REGISTRO NO EXISTE');       
        </script>";
			} 
			
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
//Insertar personas//
	public function RegistraDomi(Persona $data)
	{
		try 
		{		

$sql = "INSERT INTO domicilio (calle,num_exterior,num_int,calle1,calle2,barrio) 
		        VALUES (?, ?, ?, ?, ?, ?)";

		        $this->pdo->prepare($sql)
		     ->execute(
			array(
				$data->__GET('calle'), 
				$data->__GET('num_exterior'), 
				$data->__GET('num_int'),
				$data->__GET('calle1'),
                $data->__GET('calle2'),
                $data->__GET('barrio'),

				)

			);
	
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}



		public function RegistraPersona(Persona $data)
	{
		try 
		{

$sql = "INSERT INTO personas (paterno,materno,nombres,edad,curp,ine,id_domicilio,id_programa,telefono,fecha_ingreso) 
		VALUES (?, ?, ?, ?, ?,?,(SELECT max(id_domicilio)as id FROM domicilio), ?, ?,now())";

		        $this->pdo->prepare($sql)
		     ->execute(
			array(
		$data->__GET('paterno'), 
				$data->__GET('materno'), 
				$data->__GET('nombres'),
				$data->__GET('edad'),
                $data->__GET('curp'),
                $data->__GET('ine'),
                $data->__GET('id_programa'),
                $data->__GET('telefono'),

				)

			);

		     


	
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	
//Actualizar personas//
	public function Actualiza(Persona $data)
	{
		try 
		{		

$sql = " UPDATE domicilio,personas SET domicilio.calle=?,
                                        domicilio.num_exterior=?,
                                        domicilio.calle1=?,
                                        domicilio.calle2=?,
                                        domicilio.barrio=?,
                                        personas.paterno=?,
                                        personas.materno=?,
                                        personas.nombres=?,
                                        personas.edad=?,
                                        personas.curp=?,
                                        personas.ine=?,
                                        personas.id_programa=?,
                                        personas.telefono=? where personas.id_domicilio=domicilio.id_domicilio and personas.id_persona =?"; 

		        $this->pdo->prepare($sql)
		     ->execute(
			array(
				$data->__GET('calle'), 
				$data->__GET('num_exterior'), 
				$data->__GET('calle1'),
                $data->__GET('calle2'),
                $data->__GET('barrio'),
                $data->__GET('paterno'), 
				$data->__GET('materno'), 
				$data->__GET('nombres'),
				$data->__GET('edad'),
                $data->__GET('curp'),
                $data->__GET('ine'),
                $data->__GET('id_programa'),
                $data->__GET('telefono'),
                $data->__GET('id_persona'))

			);

		     


	
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}


public function EliminaPer($id_persona)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("DELETE FROM personas WHERE id_persona = ?");			          

			$stm->execute(array($id_persona));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}



public function RegistraPersona2(Persona $data)
	{
		try 
		{

$sql = "INSERT INTO personas (paterno,materno,nombres,edad,curp,ine,id_domicilio,id_programa,telefono,fecha_ingreso) 
		VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?,now())";

		        $this->pdo->prepare($sql)
		     ->execute(
			array(
		$data->__GET('paterno'), 
				$data->__GET('materno'), 
				$data->__GET('nombres'),
				$data->__GET('edad'),
                $data->__GET('curp'),
                $data->__GET('ine'),
                $data->__GET('domicilio'),
                $data->__GET('id_programa'),
                $data->__GET('telefono'),

				)

			);

		     


	
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}


	public function ActDom(Persona $data)
	{
		try 
		{		

$sql = " UPDATE domicilio SET calle=?,
                              num_exterior=?,
                              num_int=?,
                              calle1=?,
                              calle2=?,
                              barrio=?,
                              estado=1
                              where id_domicilio=?"; 

		        $this->pdo->prepare($sql)
		     ->execute(
			array(
				$data->__GET('calle'), 
				$data->__GET('num_exterior'), 
				$data->__GET('num_int'),
				$data->__GET('calle1'),
                $data->__GET('calle2'),
                $data->__GET('barrio'),
			    $data->__GET('id_domicilio'))

			);

		     


	
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}


	public function EliminaPre($id_preinscripcion)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("DELETE from preinscripcion WHERE id_preinscripcion = ?");			          

			$stm->execute(array($id_preinscripcion));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}






}