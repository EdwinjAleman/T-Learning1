<?php  
	class Tipojor {

		private $pdo;


		public function __Construct(){ 

										try 					{	$this->pdo=Database::Conectar();	}
										catch (Exception $e) 	{	die($e->getMessage());				}
		}

		public function Select(){
			try 					{	
										$sql=$this->pdo->prepare("SELECT * FROM tbl_tipo_jornada ORDER BY tip_jor_id desc");
										$sql->execute();
										return $sql->fetchALL(PDO::FETCH_OBJ);
									}

			catch (Exception $e) 	{	
										die($e->getMessage());
									}
		}
		
		public function Insert(Tipojor $data){
								
			try 					{	$sql = "INSERT INTO tbl_tipo_jornada (tip_jor_nombr) 
												VALUES (?)";
												$this->pdo->prepare($sql) 
															->execute(
																array(
																	$data->tip_jor_nombr
																)
															);
																		
									}

							    catch (Exception $e) { die($e->getMessage()); }
		} 

		public function Delete($tip_jor_id){
								
			try 					{	$sql="DELETE FROM tbl_tipo_jornada WHERE tip_jor_id=?";
										$this->pdo->prepare($sql)
													  ->execute(
															  array(
																		$tip_jor_id	
																  )
															  );
									  }

			catch(exception $e)		{ die ($e->getMessage()); 				 }
		}

		public function Update(Tipojor $data){
								
			try 					{	$sql = "UPDATE tbl_tipo_jornada SET tip_jor_nombr=?
															  WHERE tip_jor_id=?";
										   $this->pdo->prepare($sql) 
													 ->execute(
																array(
																	$data->tip_jor_nombr,
																	$data->tip_jor_id
																)
															);
					}

			catch (Exception $e) { die($e->getMessage()); }

} 

	
}
?>