<?php  
	require_once('../models/materialapoyo.php');

	class MaterialapoyoController{

		private $material;

		function __Construct() 
								{
									$this->material=new Material();
								}

		public function Index()
								{
								require_once('../views/frames/header.php');
            					require_once('frames/sidebaradministrador.php');
								require_once('../views/materialapoyo/materialapoyoView.php');
								//require_once('../views/frames/footer.php');	
								
								}
		public function Eliminar()
								{

									$ruta = '../assets/images/adjuntos/';
									unlink($ruta.$_POST["file"]);
									
									$this->material->Delete($_REQUEST['id']);
									require_once('../views/materialapoyo/materialapoyoView.php');
								}
								
		public function Insertar()
								{	
                                    $datos = $this->material;
                                    $datos->titulo = $_REQUEST['titulo'];
                                    $datos->fecpub  = $_REQUEST['fecpub'];
                                    $datos->descrp = $_REQUEST['descrp'];
                                    
									$datos->fasid = $_REQUEST['fasid'];
									$datos->usuid = $_REQUEST['usuid'];

									date_default_timezone_set('America/Bogota');
									$fecha = date('Ymd_Hi');
									
									

									$name=$_FILES['adjunto']['name'];
									$ext =explode('.',$name);
									$ext = end($ext);
									$temp =$_FILES['adjunto']['tmp_name'];
									$ruta = '../assets/images/adjuntos/';
									$file = $fecha.$datos->titulo.".".$ext;

									if(is_uploaded_file($temp)){

										move_uploaded_file($temp, $ruta.$file);
									}else{
										echo "NO se cargo la imagen";
									}
									
									$datos->archurl = $file;
									
									$this->material->Insert($datos);
									require_once('../views/materialapoyo/materialapoyoSelect.php');
								
								}
								

		public function Actualizar()
								{	
									$datos = $this->materialapoyo;
                                    $datos->titulo = $_REQUEST['titulo'];
                                    $datos->fecpud  = $_REQUEST['descrip'];
                                    $datos->descrp = $_REQUEST['descrp'];
                                    $datos->archurl = $_REQUEST['archurl'];
									$datos->fases = $_REQUEST['fases'];
									$datos->usuario = $_REQUEST['usuario'];
									
									$this->materialapoyo->Update($datos);
									require_once('../views/materialapoyo/materialapoyoSelect.php');
								}

	}


 ?>