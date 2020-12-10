<?php  
require_once('../models/tipojor.php');

class TipojorController{

    private $tipojor;

    function __Construct() 
								{
									$this->tipojor=new Tipojor();
								}

    public function Index()
								{
                                    require_once('../views/frames/header.php');
									if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="1"){ require_once('frames/sidebaradministrador.php'); }
									if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="2"){ require_once('frames/menuAprendiz.php'); }
									if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="3"){ require_once('frames/menuInstructor.php'); }
                                    require_once('../views/modulos/tipojor/tipojorView.php');
                                    require_once('../views/frames/footer.php');
                                }
                                
    public function Insertar()
                                {
                                    $datos=$this->tipojor;
        
                                    $datos->tip_jor_nombr=$_REQUEST['tip_jor_nombr'];

                                    $this->tipojor->Insert($datos);
                                    require_once('../views/modulos/tipojor/tipojorSelect.php');
                                }

    public function Eliminar()  
                                {
                                    $this->tipojor->Delete($_REQUEST['tip_jor_id']);
                                    require_once('../views/modulos/tipojor/tipojorSelect.php');
                                }

    public function Actualizar()
                                {
                                    
                                    $datos=$this->tipojor;

                                    $datos->tip_jor_id=$_REQUEST['tip_jor_id'];
                                    $datos->tip_jor_nombr=$_REQUEST['tip_jor_nombr'];

                                    $this->tipojor->Update($datos);
                                    require_once('../views/modulos/tipojor/tipojorSelect.php');
                                }	 
}   

 ?>