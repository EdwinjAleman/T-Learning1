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
										    require_once('../views/frames/footer.php');
									}


			public function Eliminar()
									{
										$this->usuario->Delete($_REQUEST['id']);
										require_once('../views/usuario/usuarioSelect.php');
									}


			public function Insertar()
									{	
										$datos = $this->usuario;

										$datos->nombre 	= $_REQUEST['nombre'];
										$datos->usuario = $_REQUEST['usuario'];
										$datos->area 	= $_REQUEST['area'];
										$datos->clave 	= $_REQUEST['clave'];

										$this->usuario->Insert($datos);
										require_once('../views/usuario/usuarioSelect.php');
									}


			public function Actualizar()
									{
										$datos= $this->usuario;

										$datos->id 		= $_REQUEST['id'];
										$datos->usuario = $_REQUEST['usuario'];
										$datos->nombre = $_REQUEST['nombre'];
										$datos->area 	= $_REQUEST['area'];
										$datos->clave 	= $_REQUEST['clave'];

										$this->usuario->Update($datos);
										require_once('../views/usuario/usuarioSelect.php');
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