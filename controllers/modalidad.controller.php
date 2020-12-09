<?php  
require_once('../models/modalidad.php');

class ModalidadController{

    private $modalidad;

    function __Construct() 
								{
									$this->modalidad=new Modalidad();
								}

    public function Index()
								{
                                    require_once('../views/frames/header.php');
								    if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="1"){ require_once('frames/sidebaradministrador.php'); }
									if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="2"){ require_once('frames/menuAprendiz.php'); }
									if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="3"){ require_once('frames/menuInstructor.php'); }
                                    require_once('../views/modulos/modalidad/modalidadView.php');
                                    require_once('../views/frames/footer.php');
                                }
                                
    public function Insertar()
                                {
                                    $datos=$this->modalidad;
        
                                    $datos->mod_nombr=$_REQUEST['mod_nombr'];

                                    $this->modalidad->Insert($datos);
                                    require_once('../views/modulos/modalidad/modalidadView.php');
                                }

    public function Eliminar()  
                                {
                                    $this->modalidad->Delete($_REQUEST['mod_id']);
                                    require_once('../views/modulos/modalidad/modalidadView.php');
                                }

    public function Actualizar()
                                {
                                    
                                    $datos=$this->modalidad;

                                    $datos->mod_id=$_REQUEST['mod_id'];
                                    $datos->mod_nombr=$_REQUEST['mod_nombr'];

                                    $this->modalidad->Update($datos);
                                    require_once('../views/modulos/modalidad/modalidadView.php');
                                }	 
}   

 ?>