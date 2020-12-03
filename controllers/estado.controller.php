<?php

	require_once('../models/estado.php');

	class EstadoController
	{	
		private $estado;

		function __Construct()	{
							  		$this->estado= new Estado(); 		// Instancia de la Clase del Modelo Usuario
							  	}

		public function Index()
								{
									require_once('../views/frames/header.php');
            						require_once('frames/sidebaradministrador.php');
									require_once('../views/estado/estadoView.php');		
									
									
								}

		public function Eliminar()
								{
									$this->estado->Delete($_REQUEST['id']);
									require_once('../views/estado/estadoSelect.php');
								}

		public function Insertar()
								{

									$datos= $this->estado;

									$datos->estado	= $_REQUEST['estado'];
									

									$this->estado->Insert($datos);

									require_once('../views/estado/estadoSelect.php');
								}

		public function Actualizar()
								{
									
									$datos= $this->estado;

									$datos->id 		= $_REQUEST['id'];
									$datos->estado	= $_REQUEST['estado'];
									

									$this->estado->Update($datos);

									require_once('../views/estado/estadoSelect.php');
								}								

	}

?>