<?php
	namespace controller;
	
	use model\test;
	use usr\test as test1;
	
	
	//index控制器
	class index extends base{
		
		private $testModel;
		private $testUsr;
		
		//依赖注入
		public function __construct(test $test, test1 $test1){
			$this->testModel = $test;
			$this->testUsr = $test1;
		}
		
		public function index11(){
			
			$data = D('test')->index();//调用test模型层的index()
			
			$arr['data'] = $data;
			
			$this->display('index',$arr);//显示模版
			
		}
		
		//依赖注入
		public function cc()
		{
			/*echo $this->testModel->index();
			$this->testUsr->one();*/
			$this->testUsr->one();
			
			
		}
		
		
		
		public function del(){
			$id = $_GET['id'];
			
			if(D('test')->del($id)){//调用test模型层的del()
				$this->jump('./index.php/index/index11');
			}
		}
		
		//空操作
		public function _empty(){
			echo 'test empty';
		}
		
		public function aa()
		{
			$c = import('test','usr');
			
			$c->one();
			
			$c = import('test','usr');
			
			$c->one();
			$c = import('test','usr');
			
			$c->two();
			
		}
		
	}
	