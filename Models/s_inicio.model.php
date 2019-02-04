<?php
require_once '..\..\db\conexion.php';

class InicioModel
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
				$art->__SET('imagen', $r->imagen);
				$art->__SET('programa', $r->programa);
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

}