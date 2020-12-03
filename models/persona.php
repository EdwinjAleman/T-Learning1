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

		public function InsertarBD(Respuesta $data){
								
										try 					{	$sql = "INSERT INTO tbl_responder (res_usunom, res_mensj, res_com_id) 
																						  VALUES (?, ?, ?)";
																	   $this->pdo->prepare($sql) 
																				 ->execute(
																							array(
                                                                                                $data->per_nombre,
																								$data->per_aplldo,
                                                                                                $data->per_fchnac,
                                                                                                $data->per_dirccn,
																								$data->per_correo,
                                                                                                $data->per_telfno,
                                                                                                $data->per_fchcrt,
                                                                                                $data->per_fchupd,
                                                                                                $data->per_areid
                                                                                                
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