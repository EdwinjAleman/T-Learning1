<?php

	class Area
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
									 							$sql=$this->pdo->prepare("SELECT * FROM `tbl_area` a INNER JOIN tbl_sede s ON a.are_sedid=s.sed_id");
									 							$sql->execute();
									 							return $sql->fetchALL(PDO::FETCH_OBJ);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }

		public function SelectSede()
									 {
									 	try  				 {
									 							$sql=$this->pdo->prepare("SELECT * FROM tbl_sede ORDER BY sed_id desc");
									 							$sql->execute();
									 							return $sql->fetchALL(PDO::FETCH_OBJ);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }


		public function Insert(Area $data)
									 {
									 	try  				 {
									 							$sql="INSERT INTO tbl_area (are_nombre,are_sedid)
									 										        VALUES(?,?)";
									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
									 									  			 	    $data->nombre,
									 									  			 	    $data->sedid
									 									  			 	   )
									 									  			);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }

		public function Delete($id)
									 {
									 	try  				 {
									 							$sql="DELETE FROM tbl_area WHERE are_id=?";
									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
									 									  			 	    $id
									 									  			 	  )
									 									  			);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
		
									 }


		public function Update(Area $data)
									 {
									 	try  				 {
									 							$sql="UPDATE tbl_area
									 									 SET are_nombre  = ?,
									 										 are_sedid  = ?
									 								  	WHERE are_id = ? ";

									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
									 									  			 	    
									 									  			 	    $data->nombre,
									 									  			 	    $data->sedid,
									 									  			 	    $data->id
									 									  			 	  )
									 									  			);
									 						 }

									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }



	}
?>