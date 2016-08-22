<?php

class Home extends Controller{
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$this->view->render('_layout/header_view');
		$this->view->render('home/home_view');
		$this->view->render('_layout/footer_view');
	}
}
