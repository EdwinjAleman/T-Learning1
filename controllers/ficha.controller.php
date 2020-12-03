<?php

require_once('../models/ficha.php');

    class fichaController{
        private $ficha;

        function __Construct(){
            $this->ficha = new Ficha();
        }

        public function index(){

            require_once('../views/frames/header.php');
            require_once('../views/frames/sidebaradministrador.php');
            require_once('../views/ficha/fichaView.php');
            require_once('../views/frames/footer.php');
        }


        public function Eliminar(){

            $this->ficha->Delete($_REQUEST['id']);
            require_once('../views/ficha/fichaSelect.php');

        }
        
        public function Insert(){

            $datos =  $this->ficha;

           echo "llegue";
           exit();
            $datos->codigo = $_REQUEST['codigo'];
            $datos->programa = $_REQUEST['programa'];
            $datos->abreviacion = $_REQUEST['abreviacion'];
            $datos->fechacreacion = $_REQUEST['fechacreacion'];
            $datos->fechafin = $_REQUEST['fechafin'];

            $this->ficha->Create($datos);

            require_once('../views/ficha/fichaSelect.php');

        }       



        public function Actualizar()
                                {
                                    
                                    $datos= $this->ficha;

                                    $datos->codigo = $_REQUEST['codigo'];
                                    $datos->programa = $_REQUEST['programa'];
                                    $datos->abreviatura = $_REQUEST['abreviatura'];
                                    $datos->fechacreacion = $_REQUEST['fechacreacion'];
                                    $datos->fechafin = $_REQUEST['fechafin'];
                                    
                                    $this->ficha->Update($datos);

                                    require_once('../views/ficha/fichaSelect.php');
                                }





    }




?>