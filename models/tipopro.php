<?php  
	class Tipopro {

		private $pdo;


		public function __Construct(){ 

										try 					{	$this->pdo=Database::Conectar();	}
										catch (Exception $e) 	{	die($e->getMessage());				}
		}

		public function Select(){
			try 					{	
										$sql=$this->pdo->prepare("SELECT * FROM tbl_tipo_programa ORDER BY tip_pro_id desc");
										$sql->execute();
										return $sql->fetchALL(PDO::FETCH_OBJ);
									}

			catch (Exception $e) 	{	
										die($e->getMessage());
									}
		}
		
		public function Insert(Tipopro $data){
								
			try 					{	$sql = "INSERT INTO tbl_tipo_programa (tip_pro_nombr) 
												VALUES (?)";
												$this->pdo->prepare($sql) 
															->execute(
																array(
																	$data->tip_pro_nombr
																)
															);
																		
									}

							    catch (Exception $e) { die($e->getMessage()); }
		} 

		public function Delete($tip_pro_id){
								
			try 					{	$sql="DELETE FROM tbl_tipo_programa WHERE tip_pro_id=?";
										$this->pdo->prepare($sql)
													  ->execute(
															  array(
																		$tip_pro_id	
																  )
															  );
									  }

			catch(exception $e)		{ die ($e->getMessage()); 				 }
		}

		public function Update(Tipopro $data){
								
			try 					{	$sql = "UPDATE tbl_tipo_programa SET tip_pro_nombr=?
															  WHERE tip_pro_id=?";
										   $this->pdo->prepare($sql) 
													 ->execute(
																array(
																	$data->tip_pro_nombr,
																	$data->tip_pro_id
																)
															);
					}

			catch (Exception $e) { die($e->getMessage()); }

} 

	
}
?>