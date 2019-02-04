<?php

require_once '..\..\db\conexion.php';

class ComentarioModel
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

	public function Registrar(Comentario $data)
	{
		try 
		{

		

		

$sql = "INSERT INTO comentarios (comentario) 
		        VALUES (?)";

		        $this->pdo->prepare($sql)
		     ->execute(
			array( 
				$data->__GET('comentario'), 

				)

			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}

