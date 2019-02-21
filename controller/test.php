<?php
	namespace controller;
	
	use usr\test as test1;

	
	class test extends base{
		
		public function index(){
			$this->display('index',array('name'=>'tianqi'));
		}
		
		public function test(){
			var_dump(D('test')->index());
		}
		
		public function aa($id){
			echo $id;
		}
		
		public function dd($name, test1 $test1)
		{
			$test1->two();
			echo '<br/>';
			echo $name;
		}
		
		public function ee()
		{
			echo test1::two();
		}
		
		//异常demo
		public function error(){
			if(true==1){
				throw new \lib\MyException('抛出异常了');
			}
			
			echo '代码不执行';
		}
		
		public function bb(){
			$this->jump('http://www.baidu.com');
		}
		
		//test composer
		public function cc(){
			var_dump(\Ws\Http\Request::create());
		}
	}
	