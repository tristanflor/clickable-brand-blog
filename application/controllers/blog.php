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
}