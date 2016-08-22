<?php

class Home extends Controller{
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		require 'application/models/blog_model.php';

		$blog = new Blog_model();

		$this->view->blog_posts = $blog->get_all();
		$this->view->render('_layout/header_view');
		$this->view->render('home/home_view');
		$this->view->render('_layout/footer_view');
	}
}
