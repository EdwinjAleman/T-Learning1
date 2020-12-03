<?php

	class TipoOfe
	{
		private $pdo;

		public function __Construct()
									 {
									 	try  				 {	$this->pdo=Database::Conectar(); }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }

		public function Select()
									 {
									 	try  				 {
									 							$sql=$this->pdo->prepare("SELECT * FROM tbl_tipo_oferta ORDER BY tip_ofe_id");
									 							$sql->execute();
									 							return $sql->fetchALL(PDO::FETCH_OBJ);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }


		public function Insert(TipoOfe $data)
									 {
									 	try  				 {
									 							$sql="INSERT INTO tbl_tipo_oferta (tip_ofe_dscrpc)
									 										        VALUES(?)";
									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
									 									  			 	    $data->tipoofe
									 									  			 	  
									 									  			 	   )
									 									  			);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }

		public function Delete($id)
									 {
									 	try  				 {
									 							$sql="DELETE FROM tbl_tipo_oferta WHERE tip_ofe_id=?";
									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
									 									  			 	    $id
									 									  			 	  )
									 									  			);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
		
									 }


		public function Update(TipoOfe $data)
									 {
									 	try  				 {
									 							$sql="UPDATE tbl_tipo_oferta
									 									 SET tip_ofe_dscrpc = ?
									 								  	WHERE tip_ofe_id = ? ";

									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
									 									  			 	    
									 									  			 	    $data->tipoofe,
									 									  			 	    $data->id
									 									  			 	  )
									 									  			);
									 						 }

									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }



	}
?>