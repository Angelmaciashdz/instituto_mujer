<?php
require_once '..\..\db\conexion.php';

class ContactoModel
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