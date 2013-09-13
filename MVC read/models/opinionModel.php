<?php
include 'DB.php';
class opinionModel extends DB {

	public function _constract(){

	}

	public function getAll(){

		$sql = "select * from opinion";
		$st = $this->db->prepare($sql);
		$st->execute();

		return $st->fetchAll();


	}

	public function getOne($id=1){

		$sql = "select * from opinion where id = :id";
		$st = $this->db->prepare($sql);
		$st->execute(array(":id"=>$id));

		return $st->fetchAll();
		
		
	}

}
?>