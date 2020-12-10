<?php
	
	class Datousu
	{
		private $pdo;

		public function __Construct()
									{
										try 				 { $this->pdo=Database::Conectar();	}
										catch (Exception $e) { die($e->getMessage());			}
									}

		public function Login($user,$pass)
									{
										try 				 { 
																$sql=$this->pdo->prepare("CALL LOGIN(?,?)");
																$sql->execute(array($user,$pass));
																return $sql->fetch(PDO::FETCH_OBJ);
															 }

										catch (Exception $e) { die($e->getMessage());			}
									}

		public function SelectTipoUsu(){
		                            	try 					{	
																	$sql=$this->pdo->prepare("SELECT * FROM tbl_tipo_usuario ORDER BY id desc");
																	$sql->execute();
																	return $sql->fetchALL(PDO::FETCH_OBJ);
																}
							
										catch (Exception $e) 	{	
																	die($e->getMessage());
																}
									}


		public function Logout($id)
									{
										try 				 { 
																$sql=$this->pdo->prepare("DELETE FROM tbl_login WHERE log_usuid = ?;");
																$sql->execute(array($id));
															 }

										catch (Exception $e) { die($e->getMessage());			}
									}



		public function Select()
									{
										try 				 { 
																$sql=$this->pdo->prepare("SELECT * FROM `tbl_usuario` usu INNER JOIN tbl_tipo_usuario tu ON usu.tipo_usuario_id=tu.id");
																$sql->execute();
																return $sql->fetchALL(PDO::FETCH_OBJ);
															 }

										catch (Exception $e) { die($e->getMessage());			}
									}
	
		public function Delete($id)
									{
										try 				 { 
																$sql="DELETE FROM tbl_usuario WHERE usu_id=?";
																$this->pdo->prepare($sql)
																		  ->execute(
																		  			array($id)
																		  		   );
															 }

										catch (Exception $e) { die($e->getMessage());			}
									}


		public function Insert(Datousu $data)
									{
										
										try 				 { 

																$sql = "INSERT INTO tbl_usuario (usu_fot,usu_usuari,usu_passwd,tipo_usuario_id )
																					VALUES (?,?,?,?)";
																$this->pdo->prepare($sql)
																          ->execute(
																          			array(
																          				    $data->archurl,
																          					$data->nombre,
																          					$data->pass,
																          					$data->tipusu
																          					
																          				 )
																          		   );

															 }

										catch (Exception $e) { die($e->getMessage());			}
									}


		public function Update(Usuario $data)
									{
										try 				 { 

																$sql = "UPDATE usuarios 
																						SET usuario =?,
																							nombre  =?,
																							area    =?,
																							clave   =?
																						WHERE id=?";

																$this->pdo->prepare($sql)
																          ->execute(
																          			array(
																          					$data->usuario,
																          					$data->nombre,
																          					$data->area,
																          					md5($data->clave),
																          					$data->id
																          				 )
																          		   );
															 }

										catch (Exception $e) { die($e->getMessage());			}
									}

	}

?>