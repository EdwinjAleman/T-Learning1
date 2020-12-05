<?php
		require('../models/usuario.php');

		class UsuarioController
		{
			public $usuario;

			function __Construct()
									{
										$this->usuario = new Usuario();
									}


			public function Index()
									{
										require_once('../views/frames/header.php');
										if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="1"){ require_once('frames/sidebaradministrador.php'); }
										if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="2"){ require_once('frames/menuAprendiz.php'); }
										if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="3"){ require_once('frames/menuInstructor.php'); }
										require_once('../views/usuario/usuarioView.php');
										require_once('../views/frames/footer.php');
									}


			public function Eliminar()
									{
										$this->usuario->Delete($_REQUEST['id']);
										require_once('../views/usuario/usuarioSelect.php');
									}


			public function Insertar()
									{	
										$data = $this->usuario;

										$data->usuario 		= $_REQUEST['usuario'];
										$data->clave 		= $_REQUEST['clave'];
										$data->ficha 		= $_REQUEST['ficha'];
										$data->idpersona	= $_REQUEST['idpersona'];
										$data->tipusuid		= $_REQUEST['tipusuid'];
										

										$this->usuario->Insert($data);
										require_once('../views/usuario/usuarioSelect.php');
									}


			public function Actualizar()
									{
										$datos= $this->usuario;

										$datos->id 			= $_REQUEST['id'];
										$datos->usuario 	= $_REQUEST['usuario'];
										$datos->clave   	= $_REQUEST['clave'];
										$datos->ficha 		= $_REQUEST['ficha'];
										$datos->idpersona 	= $_REQUEST['idpersona'];
										$datos->tipusuid 	= $_REQUEST['tipusuid'];

										
								 $respuesta=$this->usuario->Update($datos);
									
									require_once('../views/usuario/usuarioSelect.php');
								echo $respuesta;		
									}

			public function Login($user,$pass)
									{
										return $this->usuario->Login($user,$pass);
									}

			public function Logout($id)
									{
										$this->usuario->Logout($id);
									}


		}
?>