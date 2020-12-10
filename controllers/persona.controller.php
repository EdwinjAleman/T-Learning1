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
                                //require_once('../views/frames/footer.php');
                                }
                                
    public function Insertar(){

        $datos=$this->persona;
        
        $datos->per_nombr=$_REQUEST['per_nombr'];
        $datos->per_aplld=$_REQUEST['per_aplld'];
        $datos->per_cedl=$_REQUEST['per_cedl'];
        $datos->per_dirccn=$_REQUEST['per_dirccn'];
        $datos->per_corr=$_REQUEST['per_corr'];
        $datos->per_telfn=$_REQUEST['per_telfn'];
        $datos->per_areid=$_REQUEST['per_areid'];
       
       

        $this->persona->Insert($datos);
        require_once('../views/modulos/persona/personaSelect.php');
    }
    public function Eliminar()  
                                {
                                    $this->persona->Delete($_REQUEST['per_id']);
                                    require_once('../views/modulos/persona/personaView.php');
                                }

    public function Actualizar()
                                {
                                    
                                    $datos=$this->persona;

                                    $datos->per_id=$_REQUEST['per_id'];
                                    $datos->per_nombr=$_REQUEST['per_nombr'];
                                    $datos->per_aplld=$_REQUEST['per_aplld'];
                                    $datos->per_cedl=$_REQUEST['per_cedl'];
                                    $datos->per_dirccn=$_REQUEST['per_dirccn'];
                                    $datos->per_corr=$_REQUEST['per_corr'];
                                    $datos->per_telfn=$_REQUEST['per_telfn'];
                                    $datos->per_areid=$_REQUEST['per_areid'];
                                    

                                    $this->persona->Update($datos);
                                    require_once('../views/modulos/persona/personaView.php');
                                }	 

   
}
    

 ?>