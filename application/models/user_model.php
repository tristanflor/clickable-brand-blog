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

	public function auth($username, $password){
		$stmt = $this->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
		$stmt->bindParam(':username', $username);
	    $stmt->bindParam(':password', md5($password));
	    $stmt->execute();

	    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

	    return empty($result) ? FALSE : $result[0];
	}

}