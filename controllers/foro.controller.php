<?php  
	require_once('../models/foro.php');

	class ForoController{

		private $foro;

		function __Construct() 
								{
									$this->foro=new Foro();
								}

		public function Index()
								{
										require_once('../views/frames/header.php');
										if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="1"){ require_once('frames/sidebaradministrador.php'); }
										if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="2"){ require_once('frames/menuAprendiz.php'); }
										if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="3"){ require_once('frames/menuInstructor.php'); }
										require_once('../views/administrador/foro/foroView.php');
									}



		public function Crearforo()
		{
			require_once('../views/administrador/foro/foroInsert.php');

		}
		public function Cancelarcrearforo()
		{
			require_once('../views/administrador/foro/foroSelect.php');

			
		}
		public function EditarAntes()
		{

			require_once('../views/administrador/foro/foroInsert.php');
			require_once('../views/administrador/foro/foroSelect.php');

			
		}

		
		public function Foroinsertar(){

								$datos=$this->foro;

								$datos->foro_titulo=$_REQUEST['foro_titulo'];
								$datos->foro_mensaje=$_REQUEST['foro_mensaje'];
								$datos->foro_fecha_inicio=$_REQUEST['foro_fecha_inicio'];
								$datos->foro_fecha_fin=$_REQUEST['foro_fecha_fin'];


								//titulo, mensaje, fecha inicio, fecha fin

								$this->foro->ForoInsertarBD($datos);
								require_once('../views/administrador/foro/foroSelect.php');
								}

		public function Eliminar(){

								$this->foro->Delete($_REQUEST['id']);
								require_once('../views/administrador/foro/foroSelect.php');

								}

		public function Actualizar(){

								$datos=$this->foro;
	
								$datos->foro_id=$_REQUEST['foro_id'];
								$datos->foro_titulo=$_REQUEST['foro_titulo'];
								$datos->foro_mensaje=$_REQUEST['foro_mensaje'];
								$datos->foro_fecha_inicio=$_REQUEST['foro_fecha_inicio'];
								$datos->foro_fecha_fin=$_REQUEST['foro_fecha_fin'];
																	
								//,nombres,area,clave, estado
	
								$this->foro->Update($datos);
								require_once('../views/administrador/foro/foroSelect.php');
								}			
	}

 ?>