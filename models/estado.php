<?php  
	class Estado {

		private $pdo;


		public function __Construct(){ 

										try 					{	$this->pdo=Database::Conectar();	}
										catch (Exception $e) 	{	die($e->getMessage());				}
		}

		public function Select(){
			try 					{	
										$sql=$this->pdo->prepare("SELECT * FROM tbl_estado ORDER BY est_id desc");
										$sql->execute();
										return $sql->fetchALL(PDO::FETCH_OBJ);
									}

			catch (Exception $e) 	{	
										die($e->getMessage());
									}
		}
		
		public function Insert(Estado $data){
								
			try 					{	$sql = "INSERT INTO tbl_estado (est_nombr) 
												VALUES (?)";
												$this->pdo->prepare($sql) 
															->execute(
																array(
																	$data->est_nombr
																)
															);
																		
									}

							    catch (Exception $e) { die($e->getMessage()); }
		} 

		public function Delete($est_id){
								
			try 					{	$sql="DELETE FROM tbl_estado WHERE est_id=?";
										$this->pdo->prepare($sql)
													  ->execute(
															  array(
																		$est_id	
																  )
															  );
									  }

			catch(exception $e)		{ die ($e->getMessage()); 				 }
		}

		public function Update(Estado $data){
								
			try 					{	$sql = "UPDATE tbl_estado SET est_nombr=?
															  WHERE est_id=?";
										   $this->pdo->prepare($sql) 
													 ->execute(
																array(
																	$data->est_nombr,
																	$data->est_id
																)
															);
					}

			catch (Exception $e) { die($e->getMessage()); }

} 

	
}
?>