<?php

	class TipoPro
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
									 							$sql=$this->pdo->prepare("SELECT * FROM tbl_tipo_programa ORDER BY tip_pro_id");
									 							$sql->execute();
									 							return $sql->fetchALL(PDO::FETCH_OBJ);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }


		public function Insert(TipoPro $data)
									 {
									 	try  				 {
									 							$sql="INSERT INTO tbl_tipo_programa (tip_pro_dscrpc)
									 										        VALUES(?)";
									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
									 									  			 	    $data->tipopro
									 									  			 	  
									 									  			 	   )
									 									  			);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }

		public function Delete($id)
									 {
									 	try  				 {
									 							$sql="DELETE FROM tbl_tipo_programa WHERE tip_pro_id=?";
									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
									 									  			 	    $id
									 									  			 	  )
									 									  			);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
		
									 }


		public function Update(TipoPro $data)
									 {
									 	try  				 {
									 							$sql="UPDATE tbl_tipo_programa
									 									 SET tip_pro_dscrpc = ?
									 								  	WHERE tip_pro_id = ? ";

									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
									 									  			 	    
									 									  			 	    $data->tipopro,
									 									  			 	    $data->id
									 									  			 	  )
									 									  			);
									 						 }

									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }



	}
?>