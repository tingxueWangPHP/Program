<?php
namespace lib;

/*
 *
 *享元模式
 */

class FlyWeight
{	
	private static $obj_self;//对象本身，单例
	
	private $libArr = [];
	
	private $path_name;
	
	public function init($class_name, $namespace = 'lib')
	{
		try {
			$this->path_name = $namespace;
			
			$file = $this->path_name . '/' . $class_name . '.php';
			if (file_exists($file)) {
				include_once($file);
				
				return $this->getLibObj($class_name);
			} else {
				throw new \Exception('没有' . $file . '这个文件'); 
			}
		} catch (\Exception $e) {
			echo $e->getMessage();
		}
	}
	
	public function getLibObj($class_name)
	{
		if (isset($this->libArr[$class_name])) {
			return $this->libArr[$class_name];
		} else {
			$path = '\\' . $this->path_name . '\\' . $class_name;
			
			$class = new \ReflectionClass($path);
			$this->libArr[$class_name] = $class->newInstanceArgs();
			
			return $this->libArr[$class_name];
		}
	}
	
	public static function Sington()
	{
		if (!self::$obj_self instanceof self) {
			self::$obj_self = new self();
		}
		
		return self::$obj_self;
		
	}
}