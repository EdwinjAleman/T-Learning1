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
        
        public function Create(Ficha $data){
            try {
                $sql= "INSERT INTO tbl_ficha(fic_codigo,fic_progrm,fic_abrvtr,fic_fchcrt,fic_fchupd) 
                         VALUES (?,?,?,?,?)";
                $this->pdo->prepare($sql)->execute(array(

                                                        $data->codigo,
                                                        $data->programa,
                                                        $data->abreviacion,
                                                        $data->fechacreacion,
                                                        $data->fechafin
                                                        
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
                                                                             fic_progrm = ?,
                                                                             fic_abrvtr    = ?,
                                                                             fic_fchcrt   = ?,
                                                                             fic_fchupd  = ?
                                                                      WHERE  fic_id  = ? ";

                                                                $this->pdo->prepare($sql)
                                                                          ->execute(
                                                                                     array(
                                                                                            $data->codigo,
                                                                                            $data->programa,
                                                                                            $data->abreviacion,
                                                                                            $data->fechacreacion,
                                                                                            $data->fechafin,
                                                                                            $data->id
                                                                                          )
                                                                                    );
                                                             }

                                        catch (Exception $e) {  die($e->getMessage());           }
                                     }





    }




?>