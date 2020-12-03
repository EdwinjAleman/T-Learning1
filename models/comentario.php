<?php  
	class Comentario {

		private $pdo;


		public function __Construct(){ 

										try 					{	$this->pdo=Database::Conectar();	}
										catch (Exception $e) 	{	die($e->getMessage());				}
		}


/************************************************************** CONSULTAS DE FORO *****************************************************************/
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

		public function Insert(Comentario $data){
								
										try 					{	$sql = "INSERT INTO tbl_comentario_foro (com_mensj, com_usunom, com_foro_id) 
																						  VALUES (?, ?, ?)";
																	   $this->pdo->prepare($sql) 
																				 ->execute(
																							array(
																								$data->com_mensj,
																								$data->com_usunom,
																								$data->com_foro_id
																							)
																						);

																		
												}

							    catch (Exception $e) { die($e->getMessage()); }

							} 

		public function Delete($com_id){
								
										try 					{	$sql="DELETE FROM tbl_comentario_foro WHERE com_id=?";
																	$this->pdo->prepare($sql)
										  					  				  ->execute(
										  												array(
										  					  									$com_id	
										  													)
										  												);
										  						}

										catch(exception $e)		{ die ($e->getMessage()); 				 }
		}

	}
?>