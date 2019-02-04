<?php
require_once 'db\conexion.php';

class PublicacionModel
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

	public function ListarArticulos()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM publicaciones where tipo=1  and estado=1 order by id_publicacion desc limit 6");
			$stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$art = new Articulo();
				$art->__SET('imagen', $r->imagen);
				$art->__SET('titulo', $r->titulo);
				$art->__SET('texto', $r->texto);
				$art->__SET('link', $r->link);
				$result[] = $art;
			}

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

		public function ListarVideos()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM publicaciones where tipo=2 and estado=1 order by id_publicacion desc limit 6");
			$stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$art = new Video();

			    $art->__SET('titulo', $r->titulo);
				$art->__SET('link', $r->link);

				$result[] = $art;
			}

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

			public function ListarSlider()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM publicaciones where tipo=3 and estado=1 order by id_publicacion asc");
			$stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$art = new Slider();

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