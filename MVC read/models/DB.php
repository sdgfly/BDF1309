<?php
class DB{

	public function _constuct(){
		//create new PDO connection, var_dump if fails
		try {

			$dsn	 = "mysql:dbname=bdf1309;host=127.0.0.1:3306";
			$db_user = "root";
			$db_pass = "andreana21";

			$this->db = new PDO($dsn, $db_user, $db_pass);
			
		} catch (PDOException $error) {
			var_dump($error);
		}
	}


}
?>