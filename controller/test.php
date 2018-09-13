<?php
	namespace controller;
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
	