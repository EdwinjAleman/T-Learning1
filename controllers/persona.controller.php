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

                                //require_once('../views/frames/header.php');
								//if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="1"){ require_once('frames/sidebaradministrador.php'); }
								//if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="2"){ require_once('frames/menuAprendiz.php'); }
								//if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="3"){ require_once('frames/menuInstructor.php'); }
								require_once('../views/modulos/persona/personaView.php');
                                }
                                
    public function Insertar(){

        $datos=$this->persona;
        
        echo $datos->nombr=$_REQUEST['nombr'];
        echo $datos->aplld=$_REQUEST['aplld'];
        echo $datos->cedl=$_REQUEST['cedl'];
        echo $datos->drccn=$_REQUEST['drccn'];
        echo $datos->corr=$_REQUEST['corr'];
        echo $datos->telfn=$_REQUEST['telfn'];
        echo $datos->area=$_REQUEST['area'];
       

        $this->persona->Insert($datos);
        require_once('../views/modulos/persona/personaView.php');
    }

   
}
    

 ?>