<?php
require_once 'db\conexion.php';

class ImagenModel
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


	public function ListarImagenArt()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT imagen FROM publicaciones WHERE imagen <> '' ORDER BY id_publicacion DESC");
			$stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$art = new Imagen();
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


	public function ListarImagenGal()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT imagen FROM galeria WHERE imagen <> '' ORDER BY id_galeria DESC");
			$stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$art = new Imagen();
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

	public function ListarImagenProg()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT imagen FROM programa WHERE imagen <> '' ORDER BY id_programa DESC");
			$stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$art = new Imagen();
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

}