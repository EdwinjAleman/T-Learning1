<?php  
	class Material {

		private $pdo;


		public function __Construct(){ 

										try 					{	$this->pdo=Database::Conectar();	}
										catch (Exception $e) 	{	die($e->getMessage());				}
		}

		public function Select(){
										try 					{	
																	$sql=$this->pdo->prepare("SELECT * FROM tbl_material ORDER BY map_id desc");
																	$sql->execute();
																	return $sql->fetchALL(PDO::FETCH_OBJ);
																}

										catch (Exception $e) 	{	
																	die($e->getMessage());
																}
        
                                                            }

        public function Delete($id)
							{
								try {	
										$sql="DELETE FROM tbl_material WHERE map_id=?";
										$this->pdo->prepare($sql)
												  ->execute(
															array(
																$id
																)
															);
									} 
								catch (Exception $e) {	die($e->getMessage());	}
							}

	public function Insert(material $data)
							{   
								
         
								try {	
										$sql="INSERT INTO tbl_material (map_titulo,map_fecpub,map_descrp,map_archurl,map_fass_id,map_usr_id)
										VALUES(?,?,?,?,?,?)";
										$this->pdo->prepare($sql)
												  ->execute(
															array(
																$data->titulo,
																$data->fecpub,
																$data->descrp,
																$data->archurl,
                                                                $data->fasid,
                                                                $data->usuid
																)
															);
									} 
								catch (Exception $e) {	die($e->getMessage());	}
							}

	public function Update(material $data)
							{
								try {	
										$sql="UPDATE tbl_materialapoyo
												SET map_titulo= ?,
                                                map_fchpub =  ?, 
                                                map_descrp = ?,
                                                map_archurl = ?,
                                                map_fasid = ?,
                                                map_usuid = ?
	
												WHERE map_id = ?";

										$this->pdo->prepare($sql)
												  ->execute(
															array(
																
																$data->titulo,
																$data->fchpub,
																$data->descrp,
																$data->archurl,
                                                                $data->fasid,
                                                                $data->usuid,
                                                                $data->id
																)
															);
									} 
								catch (Exception $e) {	die($e->getMessage());	}
							}

    }
?>