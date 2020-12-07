<?php  
	class Fases {

		private $pdo;


		public function __Construct(){ 

										try 					{	$this->pdo=Database::Conectar();	}
										catch (Exception $e) 	{	die($e->getMessage());				}
		}

		public function Select(){
			try 					{	
										$sql=$this->pdo->prepare("SELECT * FROM tbl_fases ORDER BY fas_id desc");
										$sql->execute();
										return $sql->fetchALL(PDO::FETCH_OBJ);
									}

			catch (Exception $e) 	{	
										die($e->getMessage());
									}
		}
		
		public function Insert(Fases $data){
								
			try 					{	$sql = "INSERT INTO tbl_fases (fas_nombr_fas) 
												VALUES (?)";
												$this->pdo->prepare($sql) 
															->execute(
																array(
																	$data->fas_nombr_fas
																)
															);
																		
									}

							    catch (Exception $e) { die($e->getMessage()); }
		} 

		public function Delete($fas_id){
								
			try 					{	$sql="DELETE FROM tbl_fases WHERE fas_id=?";
										$this->pdo->prepare($sql)
													  ->execute(
															  array(
																		$fas_id	
																  )
															  );
									  }

			catch(exception $e)		{ die ($e->getMessage()); 				 }
		}

		public function Update(Fases $data){
								
			try 					{	$sql = "UPDATE tbl_fases SET fas_nombr_fas=?
															  WHERE fas_id=?";
										   $this->pdo->prepare($sql) 
													 ->execute(
																array(
																	$data->fas_nombr_fas,
																	$data->fas_id
																)
															);
					}

			catch (Exception $e) { die($e->getMessage()); }

} 

	
}
?>