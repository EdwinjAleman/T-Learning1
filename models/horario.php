<?php  
	class Horario {

		private $pdo;


		public function __Construct(){ 

										try 					{	$this->pdo=Database::Conectar();	}
										catch (Exception $e) 	{	die($e->getMessage());				}
		}


/************************************************************** CONSULTAS DE Horario *****************************************************************/
		public function Select(){
										try 					{	
																	$sql=$this->pdo->prepare("SELECT * FROM tbl_evento");
																	$sql->execute();
																	return $sql->fetchALL(PDO::FETCH_OBJ);
																}

										catch (Exception $e) 	{	
																	die($e->getMessage());
																}

        }
        

		public function Insert(Horario $data){
								

										try 					{	$sql = "INSERT INTO tbl_evento (eve_nombr,eve_descrpcn,eve_fech_inc,eve_fech_fn) 
																						  VALUES (?,?,?,?)";
																	   $this->pdo->prepare($sql) 
																				 ->execute(
																							array(
                                                                                                
																								$data->eve_nombr,
																								$data->eve_descrpcn,
																								$data->eve_fech_inc,
																								$data->eve_fech_fn

																							)
																						);

																		
												}

							    catch (Exception $e) { die($e->getMessage()); }

							} 

		public function Delete($eve_id){
								
										try 					{	$sql="DELETE FROM tbl_evento WHERE eve_id=?";
																	$this->pdo->prepare($sql)
										  					  				  ->execute(
										  												array(
										  					  									$eve_id	
										  													)
										  												);
										  						}

										catch(exception $e)		{ die ($e->getMessage()); 				 }
        }
        
        public function Update(Horario $data){
                                
           

			try 					{	$sql = "UPDATE tbl_evento SET eve_nombr=?,
                                                                       eve_descrpcn=?,
                                                                       eve_fech_inc=?,
                                                                       eve_fech_fn=?
															  WHERE eve_id=?";
										   $this->pdo->prepare($sql) 
													 ->execute(
																array(
																	$data->eve_nombr,
																	$data->eve_descrpcn,
																	$data->eve_fech_inc,
																	$data->eve_fech_fn,
																	$data->eve_id
																)
															);
					}

			catch (Exception $e) { die($e->getMessage()); }

} 

	}
?>