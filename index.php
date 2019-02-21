<?php
	header("Content-type: text/html; charset=utf-8"); 
	
	require './vendor/autoload.php';
	
	try {
		\lib\route::run();
	} catch (\Exception $e) {
		echo $e->getMessage();
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	