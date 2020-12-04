<?php

    class Materialapoyo{

        private $pdo;


        public function __Construct(){ 

                                        try 					{	$this->pdo=Database::Conectar();	}
                                        catch (Exception $e) 	{	die($e->getMessage());				}
        
                                    }
        
    
        public function Select(){
										try 					{	
																	$sql=$this->pdo->prepare("SELECT * FROM tbl_materialapoyo ORDER BY map_id desc");
																	$sql->execute();
																	return $sql->fetchALL(PDO::FETCH_OBJ);
																}

										catch (Exception $e) 	{	
																	die($e->getMessage());
																}
		}
        public function Insert($url,$datos)
                                    { 
                                        try  				 {
                                                                $sql1="INSERT INTO tbl_materialapoyo(map_titulo,map_fecpud,map_descrp,map_archurl,map_ficid,map_usuid) 
                                                                      VALUES(?,?,?,?,?,?);";
                                                                      
                                                                $this->pdo->prepare($sql1)
                                                                        ->execute(array(
                                                                                            $datos->titulo,
                                                                                            $datos->fecpud,
                                                                                            $datos->descrp,
                                                                                            $url,
                                                                                            $datos->ficid,
                                                                                            $datos->usuid
                                                                                            
                                                                                            
                                                                                           
                                                                                        ));
                                                               
                                                                
                                                                    $sql2=$this->GetMaterialApoyo($datos,$url);           
                                                                                        
                                                                                        

                                                                                            
                               
                                                              

                                                            }
                                        catch (Exception $e) {	die($e->getMessage());}
                                    }

        public function Delect($map_id)
                                    {
                                        try  				 {
                                                                $sql="DELETE FROM tbl_materialapoyo WHERE map_id=?";
                                                                $this->pdo->prepare($sql)
                                                                        ->execute(array($map_id));
                                                            }
                                        catch (Exception $e) {	die($e->getMessage());			 }
                                    }

        public function Update($url,$datos)
                                    {
                                        try  				 {
                                                                $sql="UPDATE tbl_materialapoyo SET map_titulo=?,map_descrp=?,map_fecpud=?,map_archurl=?
                                                                WHERE map_id=?";
                                                                $this->pdo->prepare($sql)
                                                                        ->execute(array(


                                                                                       $datos->titulo,
                                                                                       $datos->descrp,
                                                                                       $datos->fecpud,
                                                                                       $url 
                                                                                        
                                                                                        
                                                                                       
                                                                                    ));
                                                            }
                                        catch (Exception $e) {	die($e->getMessage());			 }
                                    }

    }
?>