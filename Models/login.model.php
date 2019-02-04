<?php
require_once '..\db\conexion.php';


class LoginModel
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



		public function Login_sesion($usuario,$password)

	{
			session_start();
	if (isset($usuario)) {
		header("location: inicio/");

			}
		
		try
		{
			$mdpassword= md5($password);
			$stm = $this->pdo->prepare("SELECT * FROM usuarios WHERE email=:Email AND password=:passwd");
			$stm->bindParam("Email", $usuario,PDO::PARAM_STR) ;
            $stm->bindParam("passwd", $mdpassword,PDO::PARAM_STR) ;
			$stm->execute();
			$r=$stm->fetchColumn();
			if ($r>0) {
				$_SESSION['id_usuario'] = $usuario;
		$_SESSION['usuario']=$res['usuario'];
		
   header('Location: inicio/');
        } else {
              echo "<script>
        alert('ESTE REGISTRO NO EXISTE');    

        </script>";
        header('Location: index.php');
			} 

			
			
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}


}