<?php  
require_once('../models/tipoofe.php');

class TipoofeController{

    private $tipoofe;

    function __Construct() 
								{
									$this->tipoofe=new Tipoofe();
								}

    public function Index()
								{
                                    require_once('../views/frames/header.php');
									if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="1"){ require_once('frames/sidebaradministrador.php'); }
									if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="2"){ require_once('frames/menuAprendiz.php'); }
									if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="3"){ require_once('frames/menuInstructor.php'); }
                                    require_once('../views/modulos/tipoofe/tipoofeView.php');
                                    require_once('../views/frames/footer.php');
                                }
                                
    public function Insertar()
                                {
                                    $datos=$this->tipoofe;
        
                                    $datos->tip_ofe_nombr=$_REQUEST['tip_ofe_nombr'];

                                    $this->tipoofe->Insert($datos);
                                    require_once('../views/modulos/tipoofe/tipoofeSelect.php');
                                }

    public function Eliminar()  
                                {
                                    $this->tipoofe->Delete($_REQUEST['tip_ofe_id']);
                                    require_once('../views/modulos/tipoofe/tipoofeSelect.php');
                                }

    public function Actualizar()
                                {
                                    
                                    $datos=$this->tipoofe;

                                    $datos->tip_ofe_id=$_REQUEST['tip_ofe_id'];
                                    $datos->tip_ofe_nombr=$_REQUEST['tip_ofe_nombr'];

                                    $this->tipoofe->Update($datos);
                                    require_once('../views/modulos/tipoofe/tipoofeSelect.php');
                                }	 
    }   

 ?>