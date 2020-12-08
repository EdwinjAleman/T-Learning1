<?php

    class Ficha{
        private $pdo;

        public function __Construct(){
            try {
                $this->pdo = Database::Conectar();
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        public function Select(){
            try {
                $sql=$this->pdo->prepare("SELECT * FROM tbl_ficha");
                $sql->execute();
                return $sql->fetchALL(PDO::FETCH_OBJ);
            } catch (Exception $e) {
                die($e->getMessage());    
            }
        }
    

        public function Delete($id){
            try {
                $sql= "DELETE FROM tbl_ficha WHERE fic_id=?";
                $this->pdo->prepare($sql)->execute(array($id));

            
            } catch (Exception $e) {
                die($e->getMessage());    
            }
        }
        
        public function Insert(Ficha $data){
            try {
                $sql= "INSERT INTO tbl_ficha(fic_codigo,fic_fch_inc,fic_fch_fin,fic_pro_for_id,fic_tip_jor_id,fic_tip_ofe_id,fic_mod_id) 
                         VALUES (?,?,?,?,?,?,?)";
                $this->pdo->prepare($sql)->execute(array(

                                                        $data->fic_codigo,
                                                        $data->fic_fch_inc,
                                                        $data->fic_fch_fin,
                                                        $data->fic_pro_for_id,
                                                        $data->fic_tip_jor_id,
                                                        $data->fic_tip_ofe_id,
                                                        $data->fic_mod_id
                                                        
                                                        
                                                        
                                                    )
            );
                
            } catch (Exception $e) {
                dei($e->getMessage());
            }
        }

        public function Update(Ficha $data)
                                     {
                                        try                  {
                                                                $sql="UPDATE tbl_ficha
                                                                         SET fic_codigo = ?,
                                                                             fic_fch_inc = ?,
                                                                             fic_fch_fin = ?,
                                                                             fic_pro_for_id = ?,
                                                                             fic_tip_jor_id = ?,
                                                                             fic_tip_ofe_id = ?,
                                                                             fic_mod_id =?
                                                                      WHERE  fic_id  = ? ";

                                                                $this->pdo->prepare($sql)
                                                                          ->execute(
                                                                                     array(
                                                                                            $data->fic_codigo,
                                                                                            $data->fic_fch_inc,
                                                                                            $data->fic_fch_fin,
                                                                                            $data->fic_pro_for_id,
                                                                                            $data->fic_tip_jor_id,
                                                                                            $data->fic_tip_ofe_id,
                                                                                            $data->fic_mod_id,
                                                                                            $data->fic_id

                                                                                          )
                                                                                    );
                                                             }

                                        catch (Exception $e) {  die($e->getMessage());           }
                                     }





    }




?>