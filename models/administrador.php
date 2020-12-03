<?php  
	class Administrador {

		private $pdo;


		public function __Construct(){ 

										try 					{	$this->pdo=Database::Conectar();	}
										catch (Exception $e) 	{	die($e->getMessage());				}
		}



		public function Select(){
										try 					{	
																	$sql=$this->pdo->prepare("SELECT * FROM tbl_comentario_foro ORDER BY com_id desc");
																	$sql->execute();
																	return $sql->fetchALL(PDO::FETCH_OBJ);
																}

										catch (Exception $e) 	{	
																	die($e->getMessage());
																}

		}





	}
?>