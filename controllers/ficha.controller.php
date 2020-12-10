<?php  
require_once('../models/ficha.php');

class FichaController{

    private $ficha;

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
                                    echo "suqchanedour";
                                    $datos=$this->ficha;
        
                                    $datos->fic_codigo=$_REQUEST['fic_codigo'];
                                    $datos->fic_fch_inc=$_REQUEST['fic_fch_inc'];
                                    $datos->fic_fch_fin=$_REQUEST['fic_fch_fin'];
                                    $datos->fic_pro_for_id=$_REQUEST['fic_pro_for_id'];
                                    $datos->fic_tip_jor_id=$_REQUEST['fic_tip_jor_id'];
                                    $datos->fic_tip_ofe_id=$_REQUEST['fic_tip_ofe_id'];
                                    $datos->fic_mod_id=$_REQUEST['fic_mod_id'];

                                    $this->ficha->Insert($datos);
                                    require_once('../views/modulos/ficha/fichaSelect.php');
                                }

    public function Eliminar()  
                                {
                                    $this->ficha->Delete($_REQUEST['fic_id']);
                                    require_once('../views/modulos/ficha/fichaSelect.php');
                                }

    public function Actualizar()
                                {
                                    
                                    $datos=$this->ficha;

                                    $datos->fic_id=$_REQUEST['fic_id'];
                                    $datos->fic_codigo=$_REQUEST['fic_codigo'];
                                    $datos->fic_fch_inc=$_REQUEST['fic_fch_inc'];
                                    $datos->fic_fch_fin=$_REQUEST['fic_fch_fin'];
                                    $datos->fic_pro_for_id=$_REQUEST['fic_pro_for_id'];
                                    $datos->fic_tip_jor_id=$_REQUEST['fic_tip_jor_id'];
                                    $datos->fic_tip_ofe_id=$_REQUEST['fic_tip_ofe_id'];
                                    $datos->fic_mod_id=$_REQUEST['fic_mod_id'];
                                    

                                    $this->ficha->Update($datos);
                                    require_once('../views/modulos/ficha/fichaSelect.php');
                                }	 
}   

 ?>