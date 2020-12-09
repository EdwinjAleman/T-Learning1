<?php  
require_once('../models/horario.php');

class HorarioController{

    private $horario;

    function __Construct() 
								{
									$this->horario=new Horario();
								}

    public function Index()
								{

                                    require_once('../views/frames/header.php');
								    if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="1"){ require_once('frames/sidebaradministrador.php'); }
								    if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="2"){ require_once('frames/menuAprendiz.php'); }
								    if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="3"){ require_once('frames/menuInstructor.php'); }
                                    require_once('../views/modulos/horario/horarioView.php');
                                    require_once('../views/frames/footer.php');
                                }
                                
    public function Insertar(){

                                    $datos=$this->horario;
        
                                    $datos->eve_nombr=$_REQUEST['eve_nombr'];
                                    $datos->eve_descrpcn=$_REQUEST['eve_descrpcn'];
                                    $datos->eve_fech_inc=$_REQUEST['eve_fech_inc'];
                                    $datos->eve_fech_fn=$_REQUEST['eve_fech_fn'];
       

                                    $this->horario->Insert($datos);
                                    require_once('../views/modulos/horario/horarioSelect.php');
                                }
    public function Eliminar()  
                                {
                                    $this->horario->Delete($_REQUEST['eve_id']);
                                    require_once('../views/modulos/horario/horarioSelect.php');
                                }

    public function Actualizar()
                                {
                                    
                                    $datos=$this->horario;

                                    $datos->eve_id=$_REQUEST['eve_id'];
                                    $datos->eve_nombr=$_REQUEST['eve_nombr'];
                                    $datos->eve_descrpcn=$_REQUEST['eve_descrpcn'];
                                    $datos->eve_fech_inc=$_REQUEST['eve_fech_inc'];
                                    $datos->eve_fech_fn=$_REQUEST['eve_fech_fn'];
                                    

                                    $this->horario->Update($datos);
                                    require_once('../views/modulos/horario/horarioSelect.php');
                                }	 

   
}
    

 ?>

