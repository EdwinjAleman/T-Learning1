<?php

	require_once('../models/area.php');

	class AreaController
	{	
		private $area;

		function __Construct()	{
							  		$this->area= new Area(); 		// Instancia de la Clase del Modelo Usuario
							  	}

		public function Index()
								{	
									//require_once('../views/frames/header.php');
									//if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="1"){ require_once('frames/sidebaradministrador.php'); }
									//if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="2"){ require_once('frames/menuAprendiz.php'); }
									//if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="3"){ require_once('frames/menuInstructor.php'); }
            						require_once('../views/modulos/area/areaView.php');									
									//require_once('../views/frames/footer.php');
								
								}

		public function Eliminar()
								{
									$this->area->Delete($_REQUEST['id']);
									require_once('../views/area/areaSelect.php');
								}

		public function Insertar()
								{

									$datos= $this->area;

									$datos->nombre 		= $_REQUEST['nombre'];
									$datos->sedid 		= $_REQUEST['sedid'];

									$this->area->Insert($datos);

									require_once('../views/area/areaSelect.php');
								}

		public function Actualizar()
								{
									
									$datos= $this->area;

									$datos->id 		= $_REQUEST['id'];
									$datos->nombre  = $_REQUEST['nombre'];
									$datos->sedid 	= $_REQUEST['sedid'];

									$this->area->Update($datos);

									require_once('../views/area/areaSelect.php');
								}								

	}

?>