<?php

require_once '..\..\db\conexion.php';

class ProgramaModel
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

		public function ListarTotalPersonas()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT count(id_persona) as total from personas");
			$stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$art = new Programa();
				$art->__SET('total', $r->total);
				$result[] = $art;
			}

			return $result;
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

			$stm = $this->pdo->prepare("SELECT count(personas.id_persona) as total,programa.* from personas,programa where programa.id_programa=personas.id_programa GROUP by programa.programa desc");
			$stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$art = new Programa();
				$art->__SET('total', $r->total);
				$art->__SET('folio_programa', $r->folio_programa);
				$art->__SET('id_programa', $r->id_programa);
				$art->__SET('imagen', $r->imagen);
				$art->__SET('programa', $r->programa);
				$art->__SET('fecha_inicio', $r->fecha_inicio);
				$art->__SET('fecha_termina', $r->fecha_termina);
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

	public function ListarProgramasWeb()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM programa  ORDER BY id_programa DESC");
			$stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$art = new Programa();
				$art->__SET('id_programa', $r->id_programa);
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


	public function ListarProgramasNuevos()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * from programa where id_programa not in (SELECT id_programa from personas)");
			$stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$art = new Programa();				
				$art->__SET('folio_programa', $r->folio_programa);
				$art->__SET('id_programa', $r->id_programa);
				$art->__SET('imagen', $r->imagen);
				$art->__SET('programa', $r->programa);
				$art->__SET('fecha_inicio', $r->fecha_inicio);
				$art->__SET('fecha_termina', $r->fecha_termina);
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

		public function DatosPrograma($id_programa)
	{
		try
		{
			
			$stm = $this->pdo->prepare("SELECT programa.id_programa,programa.folio_programa,programa.programa,programa.tipo_programa,tipo_programa.tipo as tipo,programa.fecha_inicio,programa.fecha_termina,programa.imparte,programa.imagen FROM programa,tipo_programa where programa.tipo_programa=tipo_programa.id_tipo and programa.id_programa=?");
			$stm->execute(array($id_programa));

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$art = new Programa();
				$art->__SET('id_programa', $r->id_programa);
				$art->__SET('folio_programa', $r->folio_programa);
				$art->__SET('programa', $r->programa);
				$art->__SET('tipo_programa', $r->tipo_programa);
				$art->__SET('tipo', $r->tipo);
				$art->__SET('fecha_inicio', $r->fecha_inicio);
				$art->__SET('fecha_termina', $r->fecha_termina);
				$art->__SET('imparte', $r->imparte);
				$art->__SET('imagen', $r->imagen);
				return $art;
			}

			
			
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
		public function DatosProgramaXls($id_programa)
	{
		try
		{
			
			$stm = $this->pdo->prepare("SELECT programa.id_programa,programa.folio_programa,programa.programa,programa.tipo_programa,tipo_programa.tipo as tipo,programa.fecha_inicio,programa.fecha_termina,programa.imparte,programa.imagen FROM programa,tipo_programa where programa.tipo_programa=tipo_programa.id_tipo  and programa.estado=1 and programa.id_programa=:id_programa");
					$stm->bindParam("id_programa", $id_programa,PDO::PARAM_STR) ;
 			$stm->execute();
			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
			$art = new Programa();
				$art->__SET('id_programa', $r->id_programa);
				$art->__SET('folio_programa', $r->folio_programa);
				$art->__SET('programa', $r->programa);
				$art->__SET('tipo_programa', $r->tipo_programa);
				$art->__SET('tipo', $r->tipo);
				$art->__SET('fecha_inicio', $r->fecha_inicio);
				$art->__SET('fecha_termina', $r->fecha_termina);
				$art->__SET('imparte', $r->imparte);
				$art->__SET('imagen', $r->imagen);
				return $art;
			}
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
			public function DatosPN($id_programa)
	{
		try
		{   $stm = $this->pdo->prepare("SELECT programa from programa where id_programa=:id_programa");
 			$stm->bindParam("id_programa", $id_programa,PDO::PARAM_STR) ;
 			$stm->execute();
			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$art = new Programa();
				$art->__SET('programa', $r->programa);
				return $art;
			}
			
			
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

		public function TotalesDoc($id_programa)
	{
		try
		{
			
			$stm = $this->pdo->prepare("SELECT COUNT(id_persona) as total  from personas where id_programa=?");
			$stm->execute(array($id_programa));

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$art = new Programa();
				$art->__SET('total', $r->total);
				return $art;
			}

			
			
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
		public function PersonasDoc($id_programa)
	{
		try
		{


			
			$stm = $this->pdo->prepare("SELECT personas.paterno,personas.materno,personas.nombres,personas.edad,domicilio.calle,domicilio.num_exterior,domicilio.num_int,domicilio.calle1,domicilio.calle2,domicilio.barrio,personas.telefono,personas.fecha_ingreso FROM personas,domicilio where personas.id_domicilio=domicilio.id_domicilio and personas.id_programa=?");
			$stm->execute(array($id_programa));
			$datos=$stm->fetchAll(PDO::FETCH_OBJ);
			foreach( $datos as $r)
			{
				$art = new Persona();			
                $art->__SET('paterno', $r->paterno);
                $art->__SET('materno', $r->materno);
                $art->__SET('nombres', $r->nombres);
                $art->__SET('edad', $r->edad);
                $art->__SET('calle', $r->calle);
                $art->__SET('num_exterior', $r->num_exterior);
		        $art->__SET('num_int', $r->num_int);
		        $art->__SET('calle1', $r->calle1);
		        $art->__SET('calle2', $r->calle2);
		        $art->__SET('barrio', $r->barrio);
		        $art->__SET('telefono', $r->telefono);
		        $art->__SET('fecha_ingreso', $r->fecha_ingreso);
			return $art;
			}

			
			
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

			$stm = $this->pdo->prepare("SELECT personas.id_persona,personas.paterno,personas.materno,personas.nombres,personas.edad,personas.curp,personas.ine,domicilio.calle,domicilio.num_exterior,domicilio.num_int,domicilio.calle1,domicilio.calle2,domicilio.barrio,programa.programa,personas.telefono,personas.fecha_ingreso from personas,programa,domicilio where personas.id_domicilio=domicilio.id_domicilio and personas.id_programa= programa.id_programa order by personas.id_persona DESC");
			$stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$art = new Persona();
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



	public function ListaTipo()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT id_tipo, tipo FROM tipo_programa where estado=1 ORDER BY id_tipo DESC");
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
		public function VerificarPrograma($folio_programa)
	{
		try
		{


			$stm = $this->pdo->prepare("SELECT count(id_programa) FROM programa WHERE folio_programa=?");
			$stm->execute(array($folio_programa));

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


public function ActPrograma(Programa $data)
	{
		try 
		{

$sql = "UPDATE programa set folio_programa=?,
                            programa=?,
                            tipo_programa=?,
                            fecha_inicio=?,
                            fecha_termina=?,
                            imparte=?
                            where id_programa=?";

		        $this->pdo->prepare($sql)
		     ->execute(
			array(
				$data->__GET('folio_programa'), 
				$data->__GET('programa'),
				$data->__GET('tipo_programa'),
                $data->__GET('fecha_inicio'),
                $data->__GET('fecha_termina'),
                $data->__GET('imparte'),
                $data->__GET('id_programa'))

			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

		public function RegistraPrograma(Programa $data)
	{
		try 
		{

$sql = "INSERT INTO programa (folio_programa,imagen,programa,tipo_programa,fecha_inicio,fecha_termina,imparte) 
		VALUES (?, ?, ?, ?, ?,?, ?)";

		        $this->pdo->prepare($sql)
		     ->execute(
			array(
				$data->__GET('folio_programa'), 
				$data->__GET('imagen'), 
				$data->__GET('programa'),
				$data->__GET('tipo_programa'),
                $data->__GET('fecha_inicio'),
                 $data->__GET('fecha_termina'),
                $data->__GET('imparte'),

				)

			);

		     


	
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function EliminaPrograma($id_programa)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("DELETE from programa WHERE id_programa = ?");			          

			$stm->execute(array($id_programa));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function RestauraProg($id_programa)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("UPDATE programa set estado= 1 WHERE id_programa = ?");			          

			$stm->execute(array($id_programa));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}