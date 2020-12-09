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
		
		public function Insert(Centro $data){
								
			try 					{	$sql = "INSERT INTO tbl_inf_centr (inf_soms, inf_misn ,inf_visn, inf_dirctr_genrl, inf_dirctr_regnl, inf_subdrctr_centr, inf_cordndr_msnl, inf_ubi, inf_lin, inf_atncn) 
												VALUES (?,?,?,?,?,?,?,?,?,?)";
												$this->pdo->prepare($sql) 
															->execute(
																array(
																	$data->inf_soms,
																	$data->inf_misn,
																	$data->inf_visn,
																	$data->inf_dirctr_genrl,
																	$data->inf_dirctr_regnl,
																	$data->inf_subdrctr_centr,
																	$data->inf_cordndr_msnl,
																	$data->inf_ubi,
																	$data->inf_lin,
																	$data->inf_atncn

																	

																)
															);
																		
									}

							    catch (Exception $e) { die($e->getMessage()); }
		} 

		public function Delete($inf_id){
								
			try 					{	$sql="DELETE FROM tbl_inf_centr WHERE inf_id=?";
										$this->pdo->prepare($sql)
													  ->execute(
															  array(
																		$inf_id
																  )
															  );
									  }

			catch(exception $e)		{ die ($e->getMessage()); 				 }
		}

		public function Update(Centro $data){
								
			try 					{	$sql = "UPDATE tbl_inf_centr SET inf_soms=?, inf_misn=?, inf_visn=?, inf_dirctr_genrl=?, inf_dirctr_regnl=?,inf_subdrctr_centr=?,inf_cordndr_msnl=?, inf_ubi=?, inf_lin=?, inf_atncn=?
															  WHERE inf_id=?";
										   $this->pdo->prepare($sql) 
													 ->execute(
																array(
																	$data->inf_soms,
																	$data->inf_misn,
																	$data->inf_visn,
																	$data->inf_dirctr_genrl,
																	$data->inf_dirctr_regnl,
																	$data->inf_subdrctr_centr,
																	$data->inf_cordndr_msnl,
																	$data->inf_ubi,
																	$data->inf_lin,
																	$data->inf_atncn,
																	$data->inf_id
																)
															);
					}

			catch (Exception $e) { die($e->getMessage()); }

} 

	
}
?>