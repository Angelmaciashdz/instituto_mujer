<?php
require_once '..\..\db\conexion.php';

class GaleriaModel
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

public function ListarImagenes()
	{
		try
		{
			$result = array();

$stm = $this->pdo->prepare("SELECT * FROM galeria ORDER BY fecha_ingreso DESC");
			$stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
            $art = new Galeria();
				$art->__SET('imagen', $r->imagen);
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

			$stm = $this->pdo->prepare("SELECT * FROM programa ORDER BY id_programa DESC");
			$stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$art = new Programa();
				$art->__SET('id_programa', $r->id_programa);
				$art->__SET('imagen', $r->imagen);
				$art->__SET('programa', $r->programa);
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

