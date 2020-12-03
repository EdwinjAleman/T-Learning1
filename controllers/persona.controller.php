<?php  
	require_once('../models/persona.php');

	class PersonaController{

		private $persona;

		function __Construct() 
								{
									$this->persona=new Persona();
								}

		public function Index()
								{
								require_once('../views/administrador/persona/personaView.php');
								}

		
		public function Personainsertar(){

								$datos=$this->persona;

								$datos->per_nombre=$_REQUEST['per_nombre'];
								$datos->per_aplldo=$_REQUEST['per_aplldo'];
								$datos->per_fchnac=$_REQUEST['per_fchnac'];
                                $datos->per_dirccn=$_REQUEST['per_dirccn'];
                                $datos->per_correo=$_REQUEST['per_correo'];
								$datos->per_telfno=$_REQUEST['per_telfno'];
								$datos->per_fchcrt=$_REQUEST['per_fchcrt'];
                                $datos->per_fchupd=$_REQUEST['per_fchupd'];
                                $datos->per_areid=$_REQUEST['per_areid'];

								//titulo, mensaje, fecha inicio, fecha fin

								$this->foro->InsertarBD($datos);
								require_once('../views/administrador/persona/personaSelect.php');
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