 <?php

class User_model extends Database{

	public function __construct(){
		parent::__construct();
	}

	public function create($user){
		$stmt = $this->prepare("INSERT INTO users (username, password, email, firstname, lastname) VALUES (:username, :password, :email, :firstname, :lastname)");

	    $stmt->bindParam(':username', $user['username']);
	    $stmt->bindParam(':password', md5($user['password']));
	    $stmt->bindParam(':email', $user['email']);
	    $stmt->bindParam(':firstname', $user['first_name']);
	    $stmt->bindParam(':lastname', $user['last_name']);
	    $stmt->execute();
	}

}