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
																	$sql=$this->pdo->prepare("SELECT * FROM `tbl_persona` a INNER JOIN tbl_area b ON a.per_areid=b.are_id");
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