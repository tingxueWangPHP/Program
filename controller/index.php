<?php
	namespace controller;
	//index控制器
	class index extends base{
		
		public function index11(){
			
			$data = D('test')->index();//调用test模型层的index()
			
			$arr['data'] = $data;
			
			$this->display('index',$arr);//显示模版
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
		
	}
	