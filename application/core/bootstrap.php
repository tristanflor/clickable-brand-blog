<?php

class Bootstrap {
	
	private $_url;

	public function __construct(){
		if(isset($_GET['url'])){
			$this->_url = explode('/', $_GET['url']);

			require 'application/controllers/'.$this->_url[0].'.php';
			$controller = new $this->_url[0]();
			
			if(isset($this->_url[1])){
				$controller->${$this->_url[1]}();
			} else {
				$controller->index();
			}
		} else {
			require 'application/controllers/home.php';
			$controller = new Home();
			$controller->index();
		}	
	}

	
}

