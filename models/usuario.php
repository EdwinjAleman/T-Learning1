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
																$sql="DELETE FROM USUARIOS WHERE id=?";
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

																$sql = "INSERT INTO usuarios (usuario,nombre,area,clave)
																					VALUES (?,?,?,?)";
																$this->pdo->prepare($sql)
																          ->execute(
																          			array(
																          					$data->usuario,
																          					$data->nombre,
																          					$data->area,
																          					md5($data->clave)
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