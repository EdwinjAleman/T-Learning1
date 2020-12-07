<?php  
	require_once('../models/respuesta.php');

	class RespuestaController{

		private $respuesta;

		function __Construct() 
								{
									$this->respuesta=new Respuesta();
								}

		public function Index()
								{
								require_once('../views/administrador/respuesta/respuestaView.php');
								}

		public function Insertar(){

								$datos=$this->respuesta;

								$datos->res_usunom=$_REQUEST['res_usunom'];
								$datos->res_mensj=$_REQUEST['res_mensj'];
								$datos->res_com_id=$_REQUEST['res_com_id'];

                                //titulo, mensaje, fecha inicio, fecha fin

								$this->respuesta->Insert($datos);
								require_once('../views/administrador/respuesta/respuestaView.php');
								}

		public function Eliminar(){

								$this->respuesta->Delete($_REQUEST['res_id']);
								
								require_once('../views/administrador/respuesta/respuestaView.php');

								}

    }		

 ?>