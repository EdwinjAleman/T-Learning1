<?php  
	class Programafor {

		private $pdo;


		public function __Construct(){ 

										try 					{	$this->pdo=Database::Conectar();	}
										catch (Exception $e) 	{	die($e->getMessage());				}
		}

		public function Select(){
			try 					{	
										$sql=$this->pdo->prepare("SELECT * FROM `tbl_programa_formacion` pf INNER JOIN tbl_tipo_programa tp ON pf.pro_for_tip_id=tp.tip_pro_id");
										$sql->execute();
										return $sql->fetchALL(PDO::FETCH_OBJ);
									}

			catch (Exception $e) 	{	
										die($e->getMessage());
									}
		}

		public function SelectTipoPro(){
			try 					{	
										$sql=$this->pdo->prepare("SELECT * FROM tbl_tipo_programa ORDER BY tip_pro_id desc");
										$sql->execute();
										return $sql->fetchALL(PDO::FETCH_OBJ);
									}

			catch (Exception $e) 	{	
										die($e->getMessage());
									}
		}

		
		public function Insert(Programafor $data){
								
			try 					{	$sql = "INSERT INTO tbl_programa_formacion (pro_for_nombr, pro_for_abrvtr, pro_for_tip_id) 
												VALUES (?, ?, ?)";
												$this->pdo->prepare($sql) 
															->execute(
																array(
																	$data->pro_for_nombr,
																	$data->pro_for_abrvtr,
																	$data->pro_for_tip_id
																)
															);
																		
									}

							    catch (Exception $e) { die($e->getMessage()); }
		} 

		public function Delete($pro_for_id){
								
			try 					{	$sql="DELETE FROM tbl_programa_formacion WHERE pro_for_id=?";
										$this->pdo->prepare($sql)
													  ->execute(
															  array(
																		$pro_for_id	
																  )
															  );
									  }

			catch(exception $e)		{ die ($e->getMessage()); 				 }
		}

		public function Update(Programafor $data){
								
			try 					{	$sql = "UPDATE tbl_programa_formacion SET pro_for_nombr=?, pro_for_abrvtr=?, pro_for_tip_id=? 
															  WHERE pro_for_id=?";
										   $this->pdo->prepare($sql) 
													 ->execute(
																array(
																	$data->pro_for_nombr,
																	$data->pro_for_abrvtr,
																	$data->pro_for_tip_id,
																	$data->pro_for_id
																)
															);
					}

			catch (Exception $e) { die($e->getMessage()); }

} 

	
}
?>