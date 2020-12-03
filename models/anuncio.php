<?php  
	class Anuncio {

		private $pdo;


		public function __Construct(){ 

										try 					{	$this->pdo=Database::Conectar();	}
										catch (Exception $e) 	{	die($e->getMessage());				}
		}

		public function AnuncioSelect(){
										try 					{	
																	$sql=$this->pdo->prepare("SELECT * FROM tbl_anuncio ORDER BY anu_id desc");
																	$sql->execute();
																	return $sql->fetchALL(PDO::FETCH_OBJ);
																}

										catch (Exception $e) 	{	
																	die($e->getMessage());
																}
		}

		public function AnuncioInsertarBD(Anuncio $data){
								
										try 					{	$sql = "INSERT INTO tbl_anuncio (anu_id,anu_descripcion,anu_titulo,anu_fechaFin,anu_fechaCreacion,anu_nombreCreador) 
																						  VALUES (NULL, ?, ?, ?, ?, ?)";
																	   $this->pdo->prepare($sql) 
																				 ->execute(
																							array(
																								$data->anu_descripcion,
																								$data->anu_titulo,
																								$data->anu_fechaFin,
																								$data->anu_fechaCreacion,
																								$data->anu_nombreCreador
																							)
																						);
																		
												}

							    catch (Exception $e) { die($e->getMessage()); }
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

public function Update(Anuncio $data){
								
			try 					{	$sql = "UPDATE tbl_anuncio SET anu_descripcion=?,anu_titulo=?,anu_fechaFin=?,anu_fechaCreacion=?,anu_nombreCreador=?
															  WHERE anu_id=?";
										   $this->pdo->prepare($sql) 
													 ->execute(
																array(
																	$data->anu_descripcion,
																	$data->anu_titulo,
																    $data->anu_fechaFin,
																	$data->anu_fechaCreacion,
																	$data->anu_nombreCreador,
																	$data->aun_id
																)
															);
					}

	catch (Exception $e) { die($e->getMessage()); }

} 

	}
?>