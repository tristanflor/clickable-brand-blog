<?php

class Blog_model extends Database{
	public function __construct(){
		parent::__construct();
	}

	public function create($title, $body){
		$stmt = $this->prepare("INSERT INTO blog (title, body) VALUES (:title, :body)");
		$stmt->bindParam(':title', $title);
	    $stmt->bindParam(':body', $body);
	}
}