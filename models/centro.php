<?php  
	class Centro {

		private $pdo;


		public function __Construct(){ 

										try 					{	$this->pdo=Database::Conectar();	}
										catch (Exception $e) 	{	die($e->getMessage());				}
		}

		public function Select(){
										try 					{	
																	$sql=$this->pdo->prepare("SELECT * FROM tbl_inf_centr ORDER BY inf_id desc");
																	$sql->execute();
																	return $sql->fetchALL(PDO::FETCH_OBJ);
																}

										catch (Exception $e) 	{	
																	die($e->getMessage());
																}
		}

		
		
		public function Delete($id){

								
										try 					{	$sql="DELETE FROM tbl_anuncio WHERE anu_id=?";
																	$this->pdo->prepare($sql)
										  					  				  ->execute(
										  												array(
										  					  									$id	
										  													)
										  												);
										  						}

										catch(exception $e)		{ die ($e->getMessage()); 				 }
}

public function Update(Anuncio $data){
								
			try 					{	$sql = "UPDATE tbl_anuncio SET anu_descripcion=?,anu_titulo=?,anu_fechaFin=?,anu_fechaCreacion=?,anu_nombreCreador=?
															  WHERE anu_id=?";
										   $this->pdo->prepare($sql) 
													 ->execute(
																array(
																	$data->anu_descripcion,
																	$data->anu_titulo,
																    $data->anu_fechaFin,
																	$data->anu_fechaCreacion,
																	$data->anu_nombreCreador,
																	$data->aun_id
																)
															);
					}

	catch (Exception $e) { die($e->getMessage()); }

} 

	}
?>