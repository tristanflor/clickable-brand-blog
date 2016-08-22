<?php

class Blog_model extends Database{
	public function __construct(){
		parent::__construct();
	}

	public function get_blog($blog_id){
		$stmt = $this->prepare("SELECT b.id, b.title, b.subtitle, b.body, b.create_date, u.firstname, u.lastname, u.id creator_id FROM blogs b INNER JOIN users u ON b.creator_id = u.id WHERE b.id = :blog_id AND b.status_id = 1");
		$stmt->bindParam(':blog_id', $blog_id);
	    $stmt->execute();

	    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
	    return empty($result) ? false : $result[0];
	}

	public function get_all(){
		$stmt = $this->prepare("SELECT b.id, b.title, b.subtitle, b.body, b.create_date, u.firstname, u.lastname FROM blogs b INNER JOIN users u ON b.creator_id = u.id WHERE b.status_id = 1 ORDER BY b.create_date DESC");
	    $stmt->execute();

	    return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function create($title, $subtitle, $body, $creator_id){
		$stmt = $this->prepare("INSERT INTO blogs (title, subtitle, body, creator_id) VALUES (:title, :subtitle, :body, :creator_id)");
		$stmt->bindParam(':title', $title);
		$stmt->bindParam(':subtitle', $subtitle);
	    $stmt->bindParam(':body', nl2br($body));
	    $stmt->bindParam(':creator_id', $creator_id);

	    $stmt->execute();

	    return $this->lastInsertId();
	}

	public function fetch_comments($blog_id){
		$stmt = $this->prepare("SELECT * FROM comments c INNER JOIN users u ON c.user_id = u.id WHERE c.blog_id = :blog_id ORDER BY c.create_date");

		$stmt->bindParam(':blog_id', $blog_id);
		$stmt->execute();

		return $stmt->fetchAll(PDO::FETCH_ASSOC); 	
	}

	public function create_comment($comment, $blog_id, $creator_id){
		$stmt = $this->prepare("INSERT INTO comments (comment, blog_id, user_id) VALUES (:comment, :blog_id, :user_id)");

	    $stmt->bindParam(':comment', $comment);
	    $stmt->bindParam(':blog_id', $blog_id);
	    $stmt->bindParam(':user_id', $creator_id);
	    $stmt->execute();
	}

	public function update($blog_id, $title, $subtitle, $body){
		$stmt = $this->prepare("UPDATE blogs SET title  = :title, subtitle = :subtitle, body = :body WHERE id = :blog_id");
		$stmt->bindParam(':blog_id', $blog_id);
		$stmt->bindParam(':title', $title);
		$stmt->bindParam(':subtitle', $subtitle);
	    $stmt->bindParam(':body', nl2br($body));

	    $stmt->execute();
	}
}