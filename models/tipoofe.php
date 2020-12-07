<?php  
	class Tipoofe {

		private $pdo;


		public function __Construct(){ 

										try 					{	$this->pdo=Database::Conectar();	}
										catch (Exception $e) 	{	die($e->getMessage());				}
		}

		public function Select(){
			try 					{	
										$sql=$this->pdo->prepare("SELECT * FROM tbl_tipo_oferta ORDER BY tip_ofe_id desc");
										$sql->execute();
										return $sql->fetchALL(PDO::FETCH_OBJ);
									}

			catch (Exception $e) 	{	
										die($e->getMessage());
									}
		}
		
		public function Insert(Tipoofe $data){
								
			try 					{	$sql = "INSERT INTO tbl_tipo_oferta (tip_ofe_nombr) 
												VALUES (?)";
												$this->pdo->prepare($sql) 
															->execute(
																array(
																	$data->tip_ofe_nombr
																)
															);
																		
									}

							    catch (Exception $e) { die($e->getMessage()); }
		} 

		public function Delete($tip_ofe_id){
								
			try 					{	$sql="DELETE FROM tbl_tipo_oferta WHERE tip_ofe_id=?";
										$this->pdo->prepare($sql)
													  ->execute(
															  array(
																		$tip_ofe_id	
																  )
															  );
									  }

			catch(exception $e)		{ die ($e->getMessage()); 				 }
		}

		public function Update(Tipoofe $data){
								
			try 					{	$sql = "UPDATE tbl_tipo_oferta SET tip_ofe_nombr=?
															  WHERE tip_ofe_id=?";
										   $this->pdo->prepare($sql) 
													 ->execute(
																array(
																	$data->tip_ofe_nombr,
																	$data->tip_ofe_id
																)
															);
					}

			catch (Exception $e) { die($e->getMessage()); }

} 

	
}
?>