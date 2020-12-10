<?php  
require_once('../models/programafor.php');

class ProgramaforController{

    private $tipopro;

    function __Construct() 
								{
									$this->programafor=new Programafor();
								}

    public function Index()
								{
                                    require_once('../views/frames/header.php');
									if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="1"){ require_once('frames/sidebaradministrador.php'); }
									if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="2"){ require_once('frames/menuAprendiz.php'); }
									if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="3"){ require_once('frames/menuInstructor.php'); }
                                    require_once('../views/modulos/programafor/programaforView.php');
                                    require_once('../views/frames/footer.php');
                                }
                                
    public function Insertar()
                                {

                                    $datos=$this->programafor;
        
                                    $datos->pro_for_nombr=$_REQUEST['pro_for_nombr'];
                                    $datos->pro_for_abrvtr=$_REQUEST['pro_for_abrvtr'];
                                    $datos->pro_for_tip_id=$_REQUEST['pro_for_tip_id'];

                                    $this->programafor->Insert($datos);
                                    require_once('../views/modulos/programafor/programaforSelect.php');
                                }

    public function Eliminar()  
                                {
                                    $this->programafor->Delete($_REQUEST['pro_for_id']);
                                    require_once('../views/modulos/programafor/programaforSelect.php');
                                }

    public function Actualizar()
                                {
                                    
                                    $datos=$this->programafor;

                                    $datos->pro_for_id=$_REQUEST['pro_for_id'];
                                    $datos->pro_for_nombr=$_REQUEST['pro_for_nombr'];
                                    $datos->pro_for_abrvtr=$_REQUEST['pro_for_abrvtr'];
                                    $datos->pro_for_tip_id=$_REQUEST['pro_for_tip_id'];

                                    $this->programafor->Update($datos);
                                    require_once('../views/modulos/programafor/programaforSelect.php');
                                }	 
}   

 ?>