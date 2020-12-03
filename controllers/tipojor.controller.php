<?php

	require_once('../models/tipojor.php');

	class TipoJorController
	{	
		private $fases;

		function __Construct()	{
							  		$this->tipojor= new TipoJor(); 		// Instancia de la Clase del Modelo Usuario
							  	}

		public function Index()
								{
									require_once('../views/frames/header.php');
            						require_once('frames/sidebaradministrador.php');
									require_once('../views/tipojor/tipojorView.php');		
									require_once('../views/frames/footer.php');
									
								}

		public function Eliminar()
								{
									$this->tipojor->Delete($_REQUEST['id']);
									require_once('../views/tipojor/tipojorSelect.php');
								}

		public function Insertar()
								{

									$datos= $this->tipojor;

									$datos->tipojor	= $_REQUEST['tipojor'];
									

									$this->tipojor->Insert($datos);

									require_once('../views/tipojor/tipojorSelect.php');
								}

		public function Actualizar()
								{
									
									$datos= $this->tipojor;

									$datos->id 		= $_REQUEST['id'];
									$datos->tipojor	= $_REQUEST['tipojor'];
									

									$this->tipojor->Update($datos);

									require_once('../views/tipojor/tipojorSelect.php');
								}								

	}

?>