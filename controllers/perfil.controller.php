<?php

	require_once('../models/perfil.php');

	class PerfilController
	{	
		private $area;

		function __Construct()	{
							  		$this->perfil= new Perfil(); 		// Instancia de la Clase del Modelo Usuario
							  	}

		public function Index()
								{	
									require_once('../views/frames/header.php');
									if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="1"){ require_once('frames/sidebaradministrador.php'); }
									if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="2"){ require_once('frames/menuAprendiz.php'); }
									if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="3"){ require_once('frames/menuInstructor.php'); }
            						require_once('../views/modulos/perfil/perfilView.php');									
									require_once('../views/frames/footer.php');
								
								}

		public function Eliminar()
								{
									$this->area->Delete($_REQUEST['are_id']);
									require_once('../views/modulos/perfil/perfilView.php');	
								}

		public function Insertar()
								{

									$datos= $this->area;

									$datos->are_nombr=$_REQUEST['are_nombr'];
									$datos->are_sedid=$_REQUEST['are_sedid'];

									$this->area->Insert($datos);

									require_once('../views/modulos/perfil/perfilView.php');	
								}

		public function Actualizar()
								{
									
									$datos= $this->area;

									$datos->are_id=$_REQUEST['are_id'];
									$datos->are_nombr=$_REQUEST['are_nombr'];
									$datos->are_sedid=$_REQUEST['are_sedid'];

									$this->area->Update($datos);

									require_once('../views/modulos/perfil/perfilView.php');	
								}								

	}

?>