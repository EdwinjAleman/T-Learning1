<?php  
require_once('../models/datousu.php');

class DatousuController{

    private $tipopro;

    function __Construct() 
								{
									$this->datousu=new Datousu();
								}

    public function Index()
								{
                                    require_once('../views/frames/header.php');
								    if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="1"){ require_once('frames/sidebaradministrador.php'); }
									if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="2"){ require_once('frames/menuAprendiz.php'); }
									if (isset($_SESSION['SRol']) and $_SESSION['SRol']=="3"){ require_once('frames/menuInstructor.php'); }
                                    require_once('../views/modulos/datousu/datousuView.php');
                                    require_once('../views/frames/footer.php');
                                }
                                
    public function Insertar()
                                {

                                    $datos = $this->datousu;
                                    $datos->nombre = $_REQUEST['nombre'];
                                    $datos->pass  = $_REQUEST['pass'];
                                    $datos->tipusu = $_REQUEST['tipusu'];

                                    date_default_timezone_set('America/Bogota');
                                    $fecha = date('Ymd_Hi');
                                    
                                    

                                    $name=$_FILES['adjunto']['name'];
                                    $ext =explode('.',$name);
                                    $ext = end($ext);
                                    $temp =$_FILES['adjunto']['tmp_name'];
                                    $ruta = '../assets/images/fotos/';
                                    $file = $fecha.$datos->nombre.".".$ext;

                                    if(is_uploaded_file($temp)){

                                        move_uploaded_file($temp, $ruta.$file);
                                    }else{
                                        echo "NO se cargo la imagen";
                                    }
                                    
                                    $datos->archurl = $file;
                                    
                                    $this->datousu->Insert($datos);
                                    require_once('../views/modulos/datousu/datousuSelect.php');
                                }

    public function Eliminar()  
                                {
                                    $this->datousu->Delete($_REQUEST['id']);
                                    require_once('../views/modulos/datousu/datousuView.php');
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