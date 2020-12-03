<?php

	require_once('../models/fases.php');

	class FasesController
	{	
		private $fases;

		function __Construct()	{
							  		$this->fases= new Fases(); 		// Instancia de la Clase del Modelo Usuario
							  	}

		public function Index()
								{
									require_once('../views/frames/header.php');
            						require_once('frames/sidebaradministrador.php');
									require_once('../views/fases/fasesView.php');		
									require_once('../views/frames/footer.php');
									
								}

		public function Eliminar()
								{
									$this->fases->Delete($_REQUEST['id']);
									require_once('../views/fases/fasesSelect.php');
								}

		public function Insertar()
								{

									$datos= $this->fases;

									$datos->fases	= $_REQUEST['fases'];
									

									$this->fases->Insert($datos);

									require_once('../views/fases/fasesSelect.php');
								}

		public function Actualizar()
								{
									
									$datos= $this->fases;

									$datos->id 		= $_REQUEST['id'];
									$datos->fases	= $_REQUEST['fases'];
									

									$this->fases->Update($datos);

									require_once('../views/fases/fasesSelect.php');
								}								

	}

?>