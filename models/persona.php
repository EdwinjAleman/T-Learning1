<?php  
	class Persona {

		private $pdo;


		public function __Construct(){ 

										try 					{	$this->pdo=Database::Conectar();	}
										catch (Exception $e) 	{	die($e->getMessage());				}
		}


/************************************************************** CONSULTAS DE FORO *****************************************************************/
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

		public function Insert(Persona $data){
								
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
																							)
																						);

																		
												}

							    catch (Exception $e) { die($e->getMessage()); }

							} 

		public function Delete($res_id){
								
										try 					{	$sql="DELETE FROM tbl_responder WHERE res_id=?";
																	$this->pdo->prepare($sql)
										  					  				  ->execute(
										  												array(
										  					  									$res_id	
										  													)
										  												);
										  						}

										catch(exception $e)		{ die ($e->getMessage()); 				 }
		}

	}
?>