<?php

function __autoload($classname){
	require 'application/core/'.$classname.'.php';
}

$app = new Bootstrap();