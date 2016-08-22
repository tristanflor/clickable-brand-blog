<?php

class Database extends PDO{

	public function __construct(){
		$dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET;
		parent::__construct($dsn, DB_USER, DB_PASS);
	}
}