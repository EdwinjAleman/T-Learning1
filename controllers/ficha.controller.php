<?php  
require_once('../models/ficha.php');

class FichaController{

    private $tipopro;

    function __Construct() 
								{
									$this->ficha=new Ficha();
								}

    public function Index()
								{
                                    require_once('../views/frames/header.php');
									if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="1"){ require_once('frames/sidebaradministrador.php'); }
									if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="2"){ require_once('frames/menuAprendiz.php'); }
									if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="3"){ require_once('frames/menuInstructor.php'); }
                                    require_once('../views/modulos/ficha/fichaView.php');
                                    require_once('../views/frames/footer.php');
                                }
                                
    public function Insertar()
                                {
                                    $datos=$this->ficha;
        
                                    $datos->tip_pro_nombr=$_REQUEST['tip_pro_nombr'];

                                    $this->ficha->Insert($datos);
                                    require_once('../views/modulos/tipopro/tipoproView.php');
                                }

    public function Eliminar()  
                                {
                                    $this->tipopro->Delete($_REQUEST['tip_pro_id']);
                                    require_once('../views/modulos/tipopro/tipoproView.php');
                                }

    public function Actualizar()
                                {
                                    
                                    $datos=$this->tipopro;

                                    $datos->tip_pro_id=$_REQUEST['tip_pro_id'];
                                    $datos->tip_pro_nombr=$_REQUEST['tip_pro_nombr'];

                                    $this->tipopro->Update($datos);
                                    require_once('../views/modulos/tipopro/tipoproView.php');
                                }	 
}   

 ?>