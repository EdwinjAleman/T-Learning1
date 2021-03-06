<?php  
	class Agenda {

		private $pdo;


		public function __Construct(){ 

										try 					{	$this->pdo=Database::Conectar();	}
										catch (Exception $e) 	{	die($e->getMessage());				}
		}

		public function Select(){
										try 					{	
																	$sql=$this->pdo->prepare("SELECT * FROM `tbl_usuario` a INNER JOIN tbl_persona b ON a.usu_perid=b.per_id INNER JOIN tbl_tipo_usuario c ON a.tipo_usuario_id=c.id WHERE tipo_usuario_id=2");
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
								
			try 					{	$sql = "UPDATE tbl_anuncio SET anu_descripcion=?,anu_titulo=?,anu_fechaCreacion=?,asu_usuari=?
															  WHERE anu_id=?";
										   $this->pdo->prepare($sql) 
													 ->execute(
																array(
																	$data->anu_descripcion,
																	$data->anu_titulo,
																	$data->anu_fechaCreacion,
																	$data->asu_usuari,
																	$data->aun_id
																)
															);
					}

	catch (Exception $e) { die($e->getMessage()); }

} 

	}
?>