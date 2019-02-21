<?php
namespace lib;

class autoload
{
	//魔术方法，当new或者extends不存在的一个类的时候，会自动触发，参数即是不存在的这个类名
	public static function load($file) 
	{
		$file = $file . '.php';
		
		if (file_exists($file)) {
			include $file;
		} else {
			throw new \lib\MyException('文件' . $file . '不存在');
		}
	}
	
	
   /**
	*自动注册加载
	*@access public
	*/
	public static function doLoad()
	{
		spl_autoload_register(array('static', 'load'));
	}
}