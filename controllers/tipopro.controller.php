<?php

	require_once('../models/tipopro.php');

	class TipoProController
	{	
		private $fases;

		function __Construct()	{
							  		$this->tipopro= new TipoPro(); 		// Instancia de la Clase del Modelo Usuario
							  	}

		public function Index()
								{
									
									require_once('../views/frames/header.php');
            						require_once('frames/sidebaradministrador.php');
									require_once('../views/tipopro/tipoproView.php');		
									
									
								}

		public function Eliminar()
								{
									$this->tipopro->Delete($_REQUEST['id']);
									require_once('../views/tipopro/tipoproSelect.php');
								}

		public function Insertar()
								{

									$datos= $this->tipopro;

									$datos->tipopro	= $_REQUEST['tipopro'];
									

									$this->tipopro->Insert($datos);

									require_once('../views/tipopro/tipoproSelect.php');
								}

		public function Actualizar()
								{
									
									$datos= $this->tipopro;

									$datos->id 		= $_REQUEST['id'];
									$datos->tipopro	= $_REQUEST['tipopro'];
									

									$this->tipopro->Update($datos);

									require_once('../views/tipopro/tipoproSelect.php');
								}								

	}

?>