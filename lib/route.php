<?php
namespace lib;

class route{
	public static $controller = 'index';
	public static $function = 'index11';
	
	
	
	public static function MakeCF(){
		if( isset($_SERVER['PATH_INFO']) )
		{
			$pathinfo = array_values( array_filter( explode('/',$_SERVER['PATH_INFO']) ) );
			
			static::$controller = array_shift($pathinfo);
			
			$f = array_shift($pathinfo);
			
			if($f){
				static::$function = $f;
				static::doGet($pathinfo);
			}
			
		}
	}
	
	public static function doGet($pathinfo){
		//处理get参数
		$param_num = count($pathinfo);
		
		if($param_num){
			$_GET = array();
			for($i=0;$i<$param_num;$i++){
				if(!$i%2 and isset($pathinfo[$i+1])){
					$_GET[ $pathinfo[$i] ] = $pathinfo[$i+1];
				}
			}
		}
	}
	
	
	
	public static function run()
	{
		static::MakeCF();
		
		static::$controller = '\\controller\\' . static::$controller;
		
		autoload::doLoad();//执行自动加载函数
		
		
		$class = new \ReflectionClass(static::$controller);
		
		//支持空操作
		$class->hasMethod(static::$function) or static::$function = '_empty';
		
		
		$instance  = $class->newInstanceArgs();//相当于类的实例化
		
		//参数注入
		$param = array();
		
		
		$method = new \ReflectionMethod(static::$controller, static::$function);
		
		
		//确定参数数组
		if( $method->isPublic() ){//如果是public属性的话
			foreach($method->getParameters() as $val){
				if(isset($_GET[$val->name])){
					$param[] = $_GET[$val->name];
				}
			}
		}
		
		
		
		try{
			call_user_func_array(array($instance,static::$function),$param);//等效于下面的方法
		}catch(\Exception $e){
			echo $e->getMessage();
		}
		
		/*$func = $class->getmethod(static::$function);
	
		$func->invokeArgs($instance, $param);*/
		
	}
	
	
}