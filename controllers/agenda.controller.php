<?php
		require('../models/agenda.php');

		class AgendaController
		{
			private $agenda;

			function __Construct()
									{
										$this->agenda = new Agenda();
									}


			public function Index()
									{
										require_once('../views/frames/header.php');
										if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="1"){ require_once('frames/sidebaradministrador.php'); }
										if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="2"){ require_once('frames/menuAprendiz.php'); }
										if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="3"){ require_once('frames/menuInstructor.php'); }
            							require_once('../views/modulos/agenda/agendaView.php');
										require_once('../views/frames/footer.php');
									}
			public function Eliminar()
									{

										$this->anuncio->Delete($_REQUEST['id']);
										require_once('../views/modulos/agenda/agendaView.php');
									}


			public function Insertar()
									{	
									 $datos = $this->anuncio;
                                     $datos->id= $_REQUEST['id'];          
                                     $datos->titulo= $_REQUEST['titulo'];      
                                     $datos->mensaje= $_REQUEST['mensaje'];     
                                     $datos->fechainicio= $_REQUEST['fechainicio'];
                                     $datos->fechafin= $_REQUEST['fechafin'];
                                     $datos->nombreCreador= $_REQUEST['nombreCreador'];   

										$this->anuncio->Insert($datos);
										require_once('../views/modulos/agenda/agendaView.php');
									}


			public function Actualizar()
									{
									 $datos = $this->anuncio;
                                     $datos->id= $_REQUEST['id'];          
                                     $datos->titulo= $_REQUEST['titulo'];      
                                     $datos->mensaje= $_REQUEST['mensaje'];     
                                     $datos->fechainicio= $_REQUEST['fechainicio'];
                                     $datos->fechafin= $_REQUEST['fechafin'];
                                     $datos->nombreCreador= $_REQUEST['nombreCreador'];   

										$this->anuncio->Insert($datos);
										require_once('../views/modulos/agenda/agendaView.php');
									}
								}

?>