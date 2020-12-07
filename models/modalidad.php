<?php  
	class Modalidad {

		private $pdo;


		public function __Construct(){ 

										try 					{	$this->pdo=Database::Conectar();	}
										catch (Exception $e) 	{	die($e->getMessage());				}
		}

		public function Select(){
			try 					{	
										$sql=$this->pdo->prepare("SELECT * FROM tbl_modalidad ORDER BY mod_id desc");
										$sql->execute();
										return $sql->fetchALL(PDO::FETCH_OBJ);
									}

			catch (Exception $e) 	{	
										die($e->getMessage());
									}
		}
		
		public function Insert(Modalidad $data){
								
			try 					{	$sql = "INSERT INTO tbl_modalidad (mod_nombr) 
												VALUES (?)";
												$this->pdo->prepare($sql) 
															->execute(
																array(
																	$data->mod_nombr
																)
															);
																		
									}

							    catch (Exception $e) { die($e->getMessage()); }
		} 

		public function Delete($mod_id){
								
			try 					{	$sql="DELETE FROM tbl_modalidad WHERE mod_id=?";
										$this->pdo->prepare($sql)
													  ->execute(
															  array(
																		$mod_id	
																  )
															  );
									  }

			catch(exception $e)		{ die ($e->getMessage()); 				 }
		}

		public function Update(Modalidad $data){
								
			try 					{	$sql = "UPDATE tbl_modalidad SET mod_nombr=?
															  WHERE mod_id=?";
										   $this->pdo->prepare($sql) 
													 ->execute(
																array(
																	$data->mod_nombr,
																	$data->mod_id
																)
															);
					}

			catch (Exception $e) { die($e->getMessage()); }

} 

	
}
?>