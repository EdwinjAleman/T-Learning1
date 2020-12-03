<?php

	require_once('../models/modalidad.php');

	class ModalidadController
	{	
		private $modal;

		function __Construct()	{
							  		$this->modal= new Modalidad(); 		// Instancia de la Clase del Modelo Usuario
							  	}

		public function Index()
								{
									require_once('../views/frames/header.php');
            						require_once('frames/sidebaradministrador.php');
									require_once('../views/modalidad/modalidadView.php');		
									
									
								}

		public function Eliminar()
								{
									$this->modal->Delete($_REQUEST['id']);
									require_once('../views/modalidad/modalidadSelect.php');
								}

		public function Insertar()
								{

									$datos= $this->modal;

									$datos->modal	= $_REQUEST['modal'];
									

									$this->modal->Insert($datos);

									require_once('../views/modalidad/modalidadSelect.php');
								}

		public function Actualizar()
								{
									
									$datos= $this->modal;

									$datos->id 		= $_REQUEST['id'];
									$datos->modal	= $_REQUEST['modal'];
									

									$this->modal->Update($datos);

									require_once('../views/modalidad/modalidadSelect.php');
								}								

	}

?>