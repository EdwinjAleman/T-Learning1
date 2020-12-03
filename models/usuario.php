<?php
	
	class Usuario
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
																$sql=$this->pdo->prepare("SELECT * FROM tbl_usuario");
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


		public function Insert(Usuario $data)
									{
										try 				 { 

																$sql = "INSERT INTO tbl_usuario (usu_usuari,usu_passwd,usu_ficid,usu_perid,tipo_usuario_id)
																					VALUES (?,?,?,?,?)";
																$this->pdo->prepare($sql)
																          ->execute(
																          			array(
																          					$data->usuario,
																          					md5($data->clave),
																          					$data->ficha,
																							$data->idpersona,
																							$data->tipusuid
																          				 )
																          		   );

															 }

										catch (Exception $e) { die($e->getMessage());			}
									}


		public function Update(Usuario $data)
									{
										try 				 { 

																$sql = "UPDATE tbl_usuario 
																						SET usu_usuari  	  =?,
																							usu_passwd  	  =?,
																							usu_ficid   	  =?,
																							usu_perid		  =?,
																							tipo_usuario_id   =?
																						WHERE usu_id=?";

																$this->pdo->prepare($sql)
																          ->execute(
																          			array(
																          					$data->usuario,
																          					md5($data->clave),
																          					$data->ficha,
																          					$data->idpersona,
																							$data->tipusuid,
																							$data->id
																          				 )
																          		   );
															 }

										catch (Exception $e) { die($e->getMessage());			}
									}

	}

?>