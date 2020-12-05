<?php  
	class Centro {

		private $pdo;


		public function __Construct(){ 

										try 					{	$this->pdo=Database::Conectar();	}
										catch (Exception $e) 	{	die($e->getMessage());				}
		}

		public function Select(){
										try 					{	
																	$sql=$this->pdo->prepare("SELECT * FROM tbl_inf_centr ORDER BY inf_id desc");
																	$sql->execute();
																	return $sql->fetchALL(PDO::FETCH_OBJ);
																}

										catch (Exception $e) 	{	
																	die($e->getMessage());
																}
		}

		
		
		public function Delete($id){

								
										try 					{	$sql="DELETE FROM tbl_anuncio WHERE anu_id=?";
																	$this->pdo->prepare($sql)
										  					  				  ->execute(
										  												array(
										  					  									$id	
										  													)
										  												);
										  						}

										catch(exception $e)		{ die ($e->getMessage()); 				 }
}

public function Update(centro $data){
								
			try 					{	$sql = "UPDATE tbl_inf_centro SET inf_soms=?,inf_misn=?,inf_visn=?,inf_dirctr_genrl=?,inf_dirctr_regnl=?, inf_subdrctr_centr=?, inf_cordndr_msnl=?
															  WHERE inf_id=?";
										   $this->pdo->prepare($sql) 
													 ->execute(
																array(
																	$datos->inf_soms,      
                                   									$datos->inf_misn,   
                                    								$datos->inf_visn,
                                    								$datos->inf_dirctr_genrl,
																	$datos->inf_dirctr_regnl, 
																	$datos->inf_subdrctr_centr,
																	$datos->inf_cordndr_msnl,
																	$datos->inf_id 
																)
															);
					}

	catch (Exception $e) { die($e->getMessage()); }

} 

	}
?>