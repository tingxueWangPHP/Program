<?php
	header("Content-type: text/html; charset=utf-8"); 
	
	require './vendor/autoload.php';
	
	include './config/config.php';//加载配置文件（mysql的配置等参数）
	include './common/func.php';//加载自定义函数文件
	getFileFromDir();//加载库文件（自定义的方法，遍历某个目录）;
	
	
	
	\lib\route::run();
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	