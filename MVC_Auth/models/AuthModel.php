<?php

class AuthModel  {
	
	public $db;
	
	public function __contruct($dsn, $user, $pass) {
	
		$this->db = new \PDO($dsn, $user, $pass);
		$this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);	
		
	}
	
	public function getUserByNamePass($name, $pass){
		
		$stmt = $this->db->prepare(" 
		
			SELECT user_id AS id, user_name AS name, user_pass AS password, user_fullname AS fullname
			FROM users
			WHERE (user_name = :name)
				AND (user_pass = :pass);
		
		");
		
		if($stmt->execute(array(':name' => $name, ':pass' => md5($pass)))){
		
			$rows = $stmt->fetchAll(\PDO::FETCH_ASSOC);
			if(count($rows) === 1){
				
				return $rows[0];
				
			}
		
			
		}
		return FALSE;
	}

}
?>