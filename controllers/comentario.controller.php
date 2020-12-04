<?php  
	require_once('../models/comentario.php');

	class ComentarioController{

		private $comentario;

		function __Construct() 
								{
									$this->comentario=new Comentario();
								}

		public function Index()
								{
								
									require_once('../views/administrador/comentario/comentarioView.php');	
											
								}

		public function Insertar(){

								$datos=$this->comentario;

								$datos->com_usunom=$_REQUEST['com_usunom'];
								$datos->com_mensj=$_REQUEST['com_mensj'];
								$datos->com_foro_id=$_REQUEST['com_foro_id'];

								//titulo, mensaje, fecha inicio, fecha fin

								$this->comentario->Insert($datos);
								require_once('../views/administrador/comentario/comentarioView.php');								}

		public function Eliminar(){

								$this->comentario->Delete($_REQUEST['com_id']);
								
								require_once('../views/administrador/comentario/comentarioView.php');

								}


	}							
		


		
 ?>