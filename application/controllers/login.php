<?php

class Login extends Controller{
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->view->render('_layout/header_view');
		$this->view->render('login/login_view');
		$this->view->render('_layout/footer_view');
	}

	public function register(){
		$this->view->render('_layout/header_view');
		$this->view->render('login/register_view');
		$this->view->render('_layout/footer_view');
	}

	public function save(){
		require 'application/models/user_model.php';

		$user = $_POST;
		$user_model = new User_model();
		$user_model->create($user);

		header("Location: ".BASE_URL.'login');
		die();		
	}

	public function login(){
		$username = $_POST['username'];
		$password = $_POST['password'];
	}

	public function logout(){
		session_destroy();
	}
}