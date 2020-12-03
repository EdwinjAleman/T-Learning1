<?php

	require_once('../models/tipoofe.php');

	class TipoOfeController
	{	
		private $fases;

		function __Construct()	{
							  		$this->tipoofe= new TipoOfe(); 		// Instancia de la Clase del Modelo Usuario
							  	}

		public function Index()
								{
									
									require_once('../views/frames/header.php');
            						require_once('frames/sidebaradministrador.php');
									require_once('../views/tipoofe/tipoofeView.php');		
									
									
								}

		public function Eliminar()
								{
									$this->tipoofe->Delete($_REQUEST['id']);
									require_once('../views/tipoofe/tipoofeSelect.php');
								}

		public function Insertar()
								{

									$datos= $this->tipoofe;

									$datos->tipoofe	= $_REQUEST['tipoofe'];
									

									$this->tipoofe->Insert($datos);

									require_once('../views/tipoofe/tipoofeSelect.php');
								}

		public function Actualizar()
								{
									
									$datos= $this->tipoofe;

									$datos->id 		= $_REQUEST['id'];
									$datos->tipoofe	= $_REQUEST['tipoofe'];
									

									$this->tipoofe->Update($datos);

									require_once('../views/tipoofe/tipoofeSelect.php');
								}								

	}

?>