<?php  
	class Persona {

		private $pdo;


		public function __Construct(){ 

										try 					{	$this->pdo=Database::Conectar();	}
										catch (Exception $e) 	{	die($e->getMessage());				}
		}


/************************************************************** CONSULTAS DE PERSONA *****************************************************************/
		public function Select(){
										try 					{	
																	$sql=$this->pdo->prepare("SELECT * FROM tbl_persona ORDER BY per_id desc");
																	$sql->execute();
																	return $sql->fetchALL(PDO::FETCH_OBJ);
																}

										catch (Exception $e) 	{	
																	die($e->getMessage());
																}

        }
        public function SelectTipoArea(){
			try 					{	
										$sql=$this->pdo->prepare("SELECT * FROM tbl_area ORDER BY are_id desc");
										$sql->execute();
										return $sql->fetchALL(PDO::FETCH_OBJ);
									}

			catch (Exception $e) 	{	
										die($e->getMessage());
									}
		}

		public function Insert(Persona $data){
								
<<<<<<< HEAD
										try 					{	$sql = "INSERT INTO tbl_persona (per_nombr,per_aplld,per_cedl,per_dirccn,per_corr,per_telfn,per_areid) 
																						  VALUES (?,?,?,?,?,?,?)";
																	   $this->pdo->prepare($sql) 
																				 ->execute(
																							array(
                                                                                                $data->per_nombr,
																								$data->per_aplld,
																								$data->per_cedl,
																								$data->per_dirccn,
																								$data->per_corr,
																								$data->per_telfn,
																								$data->per_areid
=======
										try 	{	$sql = "INSERT INTO `tbl_persona`(`per_nombr`, `per_aplld`, `per_cedl`, `per_dirccn`, `per_corr`, `per_telfn`, `per_areid`) 
															  VALUES (?,?,?,?,?,?,?)";
															   $this->pdo->prepare($sql) 
																	 ->execute(
																				array(
                                                                                        $data->nombr,
																						$data->aplld,
																						$data->cedl,
																						$data->drccn,
																						$data->corr,
																						$data->telfn,
																						$data->area
>>>>>>> e9513142ae11d5407302411a9c87e5a3c0b02fda
																							)
																						);

																		
												}

							    catch (Exception $e) { die($e->getMessage()); }

							} 

		public function Delete($per_id){
								
										try 					{	$sql="DELETE FROM tbl_persona WHERE per_id=?";
																	$this->pdo->prepare($sql)
										  					  				  ->execute(
										  												array(
										  					  									$per_id	
										  													)
										  												);
										  						}

										catch(exception $e)		{ die ($e->getMessage()); 				 }
        }
        
        public function Update(Persona $data){
                                
           

			try 					{	$sql = "UPDATE tbl_persona SET per_nombr=?,
                                                                       per_aplld=?,
                                                                       per_cedl=?,
                                                                       per_dirccn=?,
                                                                       per_corr=?,
                                                                       per_telfn=?,
                                                                       per_areid=?
															  WHERE per_id=?";
										   $this->pdo->prepare($sql) 
													 ->execute(
																array(
																	$data->per_nombr,
																	$data->per_aplld,
																	$data->per_cedl,
																	$data->per_dirccn,
																	$data->per_corr,
																	$data->per_telfn,
																	$data->per_areid,
																	$data->per_id
																)
															);
					}

			catch (Exception $e) { die($e->getMessage()); }

} 

	}
?>