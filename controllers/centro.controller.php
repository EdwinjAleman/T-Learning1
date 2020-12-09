<?php  
require_once('../models/centro.php');

class CentroController{

    private $centro;

    function __Construct() 
								{
									$this->centro=new Centro();
								}

    public function Index()
								{
                                    require_once('../views/frames/header.php');
                                    if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="1"){ require_once('frames/sidebaradministrador.php'); }
									if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="2"){ require_once('frames/menuAprendiz.php'); }
									if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="3"){ require_once('frames/menuInstructor.php'); }
                                    require_once('../views/modulos/centro/centroView.php');
                                    require_once('../views/frames/footer.php');
                                }
                                
    public function Insertar()
                                {
                                    echo "hola beibi";
                                    $datos=$this->centro;
        
                                    $datos->inf_soms=$_REQUEST['inf_soms'];
                                    $datos->inf_misn=$_REQUEST['inf_misn'];
                                    $datos->inf_visn=$_REQUEST['inf_visn'];
                                    $datos->inf_dirctr_genrl=$_REQUEST['inf_dirctr_genrl'];
                                    $datos->inf_dirctr_regnl=$_REQUEST['inf_dirctr_regnl'];
                                    $datos->inf_subdrctr_centr=$_REQUEST['inf_subdrctr_centr'];
                                    $datos->inf_cordndr_msnl=$_REQUEST['inf_cordndr_msnl'];
                                    $datos->inf_ubi=$_REQUEST['inf_ubi'];
                                    $datos->inf_lin=$_REQUEST['inf_lin'];
                                    $datos->inf_atncn=$_REQUEST['inf_atncn'];

                                    $this->centro->Insert($datos);
                                    require_once('../views/modulos/centro/centroView.php');
                                }

    public function Eliminar()  
                                {
                                    $this->centro->Delete($_REQUEST['inf_id']);
                                    require_once('../views/modulos/centro/centroView.php');
                                }

    public function Actualizar()
                                {
                                    
                                    $datos=$this->centro;

                                    $datos->inf_id=$_REQUEST['inf_id'];
                                    $datos->inf_soms=$_REQUEST['inf_soms'];
                                    $datos->inf_misn=$_REQUEST['inf_misn'];
                                    $datos->inf_visn=$_REQUEST['inf_visn'];
                                    $datos->inf_dirctr_genrl=$_REQUEST['inf_dirctr_genrl'];
                                    $datos->inf_dirctr_regnl=$_REQUEST['inf_dirctr_regnl'];
                                    $datos->inf_subdrctr_centr=$_REQUEST['inf_subdrctr_centr'];
                                    $datos->inf_cordndr_msnl=$_REQUEST['inf_cordndr_msnl'];
                                    $datos->inf_ubi=$_REQUEST['inf_ubi'];
                                    $datos->inf_lin=$_REQUEST['inf_lin'];
                                    $datos->inf_atncn=$_REQUEST['inf_atncn'];


                                    $this->centro->Update($datos);
                                    require_once('../views/modulos/centro/centroView.php');
                                }	 
}   

 ?>