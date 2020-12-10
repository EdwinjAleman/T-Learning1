<?php

	class Perfil
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
									 							$sql="INSERT INTO tbl_area (are_nombr,are_sedid)
									 										        VALUES(?,?)";
									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
									 									  			 	    $data->are_nombr,
									 									  			 	    $data->are_sedid
									 									  			 	   )
									 									  			);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }

		public function Delete($are_id)
									 {
									 	try  				 {
									 							$sql="DELETE FROM tbl_area WHERE are_id=?";
									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
									 									  			 	    $are_id
									 									  			 	  )
									 									  			);
									 						 }
									 	catch (Exception $e) {	die($e->getMessage());			 }
		
									 }


		public function Update(Area $data)
									 {
									 	try  				 {
									 							$sql="UPDATE tbl_area SET are_nombr=?,	are_sedid=?
									 								WHERE are_id=?";

									 							$this->pdo->prepare($sql)
									 									  ->execute(
									 									  			 array(
									 									  			 	    
									 									  			 	    $data->are_nombr,
									 									  			 	    $data->are_sedid,
									 									  			 	    $data->are_id
									 									  			 	  )
									 									  			);
									 						 }

									 	catch (Exception $e) {	die($e->getMessage());			 }
									 }



	}
?>