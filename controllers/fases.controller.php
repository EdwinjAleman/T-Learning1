<?php  
require_once('../models/fases.php');

class FasesController{

    private $tipopro;

    function __Construct() 
								{
									$this->fases=new Fases();
								}

    public function Index()
								{
                                    require_once('../views/frames/header.php');
									if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="1"){ require_once('frames/sidebaradministrador.php'); }
									if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="2"){ require_once('frames/menuAprendiz.php'); }
									if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="3"){ require_once('frames/menuInstructor.php'); }
									require_once('../views/modulos/fases/fasesView.php');
                                }
                                
    public function Insertar()
                                {
                                    $datos=$this->fases;
        
                                    $datos->fas_nombr_fas=$_REQUEST['fas_nombr_fas'];

                                    $this->fases->Insert($datos);
                                    require_once('../views/modulos/fases/fasesView.php');
                                }

    public function Eliminar()  
                                {
                                    $this->fases->Delete($_REQUEST['fas_id']);
                                    require_once('../views/modulos/fases/fasesView.php');
                                }

    public function Actualizar()
                                {
                                    
                                    $datos=$this->fases;

                                    $datos->fas_id=$_REQUEST['fas_id'];
                                    $datos->fas_nombr_fas=$_REQUEST['fas_nombr_fas'];

                                    $this->fases->Update($datos);
                                    require_once('../views/modulos/fases/fasesView.php');
                                }	 
}   

 ?>