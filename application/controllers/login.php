<?php

class Login{
	
	public function index(){
		echo 'this is';

	}

	public funcion register(){

	}

	public function login(){
		$username = $_POST['username'];
		$password = $_POST['password'];
	}

	public function logout(){
		session_destroy();
	}
}