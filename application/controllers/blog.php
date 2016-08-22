<?php

class Blog extends Controller{
	public function __construct(){
		parent::__construct();
	}

	public function index(){

	}

	public function post(){
		$this->view->render('_layout/header_view');
		$this->view->render('blog/post_view');
		$this->view->render('_layout/footer_view');	
	}

	public function view($blog_id){
		require 'application/models/blog_model.php';

		$blog = new Blog_model();

		$this->view->blog_post = $blog->get_blog($blog_id);
		$this->view->comments = $blog->fetch_comments($blog_id);
		$this->view->render('_layout/header_view');
		$this->view->render('blog/blog_post_view');
		$this->view->render('_layout/footer_view');	
	}

	public function create(){
		require 'application/models/blog_model.php';

		$blog = new Blog_model();

		$title = $_POST['title'];
		$subtitle = $_POST['subtitle'];
		$body = $_POST['body'];

		$blog_id = $blog->create($title, $subtitle, $body, $_SESSION['user_id']);

		header("Location: ".BASE_URL.'blog/view/'.$blog_id);
		die();
	}

	public function comment(){
		$blog_id = $_POST['blog_id'];
		$comment = $_POST['comment'];

		require 'application/models/blog_model.php';

		$blog = new Blog_model();
		$blog->create_comment($comment, $blog_id, $_SESSION['user_id']);

		header("Location: ".BASE_URL.'blog/view/'.$blog_id);
		die();
	}
}