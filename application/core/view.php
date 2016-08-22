<?php

class View{
	public function render($display){
		require 'application/views/'.$display.'.php';
	}
}