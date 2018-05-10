<?php
	/*
	*自定义公共函数文件
	*/
	
	
	//实例化模型类
	//param $model 模型名
	function D($model){
		$file = './model/'.$model.'.php';
		
		file_exists($file) && include($file);
		
		$model = '\\model\\'.$model;
		
		return new $model();
	}
	
	
	
	//打印数据，如果是数组（print_r）,否则（echo）
	function dump($data){
		if(is_array($data)){
			print_r($data);
		}else{
			echo $data;
		}
	}
	
	//加载某个目录下的所有文件
	//param $dir 目录路径
	function getFileFromDir($dir='./lib'){
		
		$dh = opendir($dir);
		
		while($file = readdir($dh)){
			if($file=='.' || $file=='..'){
				continue;
			}
			
			if(is_dir($dir.'/'.$file)){
				getFileFromDir($dir.'/'.$file);
			}
			
			include $dir.'/'.$file;
		}
		
		closedir($dh);
	}
	
	
	
	