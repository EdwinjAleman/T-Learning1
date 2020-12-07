<?php  
require_once('../models/estado.php');

class EstadoController{

    private $estado;

    function __Construct() 
								{
									$this->estado=new Estado();
								}

    public function Index()
								{
                                    require_once('../views/frames/header.php');
								    if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="1"){ require_once('frames/sidebaradministrador.php'); }
									if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="2"){ require_once('frames/menuAprendiz.php'); }
									if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="3"){ require_once('frames/menuInstructor.php'); }
									require_once('../views/modulos/estado/estadoView.php');
                                }
                                
    public function Insertar()
                                {
                                    $datos=$this->estado;
        
                                    $datos->est_nombr=$_REQUEST['est_nombr'];

                                    $this->estado->Insert($datos);
                                    require_once('../views/modulos/estado/estadoView.php');
                                }

    public function Eliminar()  
                                {
                                    $this->estado->Delete($_REQUEST['est_id']);
                                    require_once('../views/modulos/estado/estadoView.php');
                                }

    public function Actualizar()
                                {
                                    
                                    $datos=$this->estado;

                                    $datos->est_id=$_REQUEST['est_id'];
                                    $datos->est_nombr=$_REQUEST['est_nombr'];

                                    $this->estado->Update($datos);
                                    require_once('../views/modulos/estado/estadoView.php');
                                }	 
}   

 ?>