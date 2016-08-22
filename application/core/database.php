<?php

class Database extends PDO{

	public function __construct($dsn, $user, $pass,){
		parent::__construct($dsn, $user, $pass, $driver_options);
	}
}