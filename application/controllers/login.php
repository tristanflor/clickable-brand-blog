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

		if($user['password'] === $user['confirm_password']){
			unset($user['confirm_password']);

			$user['password'] = $user['password'];
			$user_model = new User_model();
			$user_model->create($user);		
			header("Location: ".BASE_URL.'login');
			die();
		} else {
			// Set error message
			header("Location: ".BASE_URL.'login/register');
			die();
		}
				
	}

	public function auth(){
		require 'application/models/user_model.php';

		print_r($_POST);
		$username = $_POST['username'];
		$password = $_POST['password'];

		$user_model = new User_model();
		$user = $user_model->auth($username, $password);

		if($user){
			$_SESSION['is_logged_in'] = true;
			$_SESSION['user_id'] = $user['id'];
			$_SESSION['username'] = $user['username'];
			$_SESSION['first_name'] = $user['firstname'];
			$_SESSION['last_name'] = $user['lastname'];
			$_SESSION['email'] = $user['email'];

			header("Location: ".BASE_URL.'home');
			die();	
		} else {
			// Set error message
			header("Location: ".BASE_URL.'login');
			die();
		}
	}

	public function logout(){
		session_destroy();
		header("Location: ".BASE_URL.'login');
		die();
	}
}