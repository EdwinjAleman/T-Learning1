<?php

    require_once('../models/materiapoyo.php');
	require_once('../models/usuario.php');

	class MateriapoyoController
	{	
		private $materiapoyo;

		function __Construct()	{
                                      $this->materialapoyo= new Materiapoyo();
                                      	
							  	}

		public function Index()
								{
									   
									//require_once('../views/frames/header.php');
									 //require_once('frames/sidebaradministrador.php');
									require_once('../views/materialapoyo/materialapoyoInsert.php');
									//require_once('../views/frames/footer.php');
									
									
                                }
        public function Faseconfirmar()
                                    {
                                        
                                        


                                        
                                        $fichapuntero=$_REQUEST['fcpt'];


                                        

                                        require_once('../views/materialapoyo/materialapoyoSelect.php'); 

									}
		public function Insertar()
								{

									$fichapuntero=$_REQUEST['ficid'];

									$datos= $this->materialapoyo;

									$datos->publicador=$_REQUEST['publicador'];
									$datos->titulo=$_REQUEST['titulo'];
									$datos->descrp=$_REQUEST['descrp'];
								    $datos->fecpud=$_REQUEST['fecpud'];

									date_default_timezone_set('America/Bogota');
									$fecha  = date("Ymd_His");
									
									$name = $_FILES['archivo']['name'];     
									$exts = explode('.',$name);             
									$exts = end($exts);
									
									$datos->icono=$exts;
									
									$temp = $_FILES['archivo']['tmp_name']; 
									$ruta = '../assets/fichas/'.$fichapuntero.'/';
									$ruta = $ruta.$fecha.".".$exts;

									if(is_uploaded_file($temp)){
										move_uploaded_file($temp,$ruta);										
									}else{
										echo "No se cargo la imagen";
									}
									
	
																	
									$this->materialapoyo->Insert($ruta,$datos);

									require_once('../views/materialapoyo/materialapoyoSelect.php');


								}
		public function Actualizar()
		{					
									$fichapuntero=$_REQUEST['ficid'];
									$datos= $this->materialapoyo;

									$datos->id=$_REQUEST['map_id'];
									$datos->publicador=$_REQUEST['publicador'];
									$datos->titulo=$_REQUEST['titulo'];
									$datos->descrp=$_REQUEST['descrp'];
									$datos->fases=$_REQUEST['fases'];
									$datos->ficid=$_REQUEST['ficid'];

									$url = $_REQUEST['url'];
									file_exists($url) ? unlink($url): "";		
									
																													

									date_default_timezone_set('America/Bogota');
									$fecha  = date("Ymd_His");
								
									$name = $_FILES['archivo']['name'];     
									$exts = explode('.',$name);             
									$exts = end($exts);  
									
									$datos->icono=$exts;

									$temp = $_FILES['archivo']['tmp_name']; 
									$ruta = '../assets/fichas/'.$datos->ficid.'/';
									$ruta = $ruta.$fecha.".".$exts;

									if(is_uploaded_file($temp)){

										move_uploaded_file($temp,$ruta);

									}else{

										echo "No se cargo la imagen";

									}	
									
									$idfase=$_REQUEST['fases'];

									$this->materialapoyo->Update($ruta,$datos);

									require_once('../views/materialapoyo/materialapoyoSelect.php');
			}
			public function Eliminar()
			{
				
				$idfase=$_REQUEST['idfase'];
				$map_id = $_REQUEST['map_id'];
				

				$map_archurl = $_REQUEST['map_archurl'];

				file_exists($map_archurl) ? unlink($urmap_archurll): "";

				$this->materialapoyo->Delect($map_id);

				$fichapuntero=$_REQUEST['fcpt'];

				require_once('../views/materialapoyo/materialapoyoSelect.php');

			}	


	}

?>